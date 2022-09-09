DELIMITER $$
create trigger gerar_carrinho after 
	insert on `usuarios`
		FOR EACH ROW 
            BEGIN
			insert into `carrinhos`
				values(default, NEW.id);
            END $$
DELIMITER ;