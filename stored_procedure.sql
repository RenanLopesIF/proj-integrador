delimiter $$    
 CREATE PROCEDURE finalizar_compra(
  in idUsuario integer,
  in formaPgt integer,
  in parcelas int(11),
  in vencimento date,
  in status enum('pendente','pago'))
begin
	  	set @carrinhoId = (select id from carrinhos where id_usuario = idUsuario);
		set @valorTotal = (select sum(el.preco*lc.qtd)
            from livros_carrinho lc
            inner join livros l on l.id = lc.id_livro
            inner join estoque_livros el on l.cod_lote=el.cod
            where lc.id_carrinho = @carrinhoId);
	  
       insert into pagamentos
       	values(default, formaPgt, @valorTotal, parcelas, default, vencimento, status);
       
       set @idPagamento = last_insert_id();
       
       insert into compras 
       values(default, idUsuario, @carrinhoId, @idPagamento);
      
      	update estoque_livros el 
			join livros l on l.cod_lote = el.cod 
			join livros_carrinho lc on lc.id_livro = l.id 
			join carrinhos c on c.id = lc.id_carrinho 
			set el.qtd = el.qtd - lc.qtd 
		where c.id_usuario = idUsuario and lc.`order`= -1;
      
      update livros_carrinho 
		set `order` = (SELECT `order`+1 FROM livros_carrinho where id_carrinho = @carrinhoId ORDER BY `order` DESC LIMIT 1)
		where id_carrinho = @carrinhoId and `order` = -1;
	
	end $$
delimiter ;