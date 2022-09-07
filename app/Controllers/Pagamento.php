<?php

namespace App\Controllers;

class Pagamento extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        }

        $carrinhosModel = new \App\Models\CarrinhosModel();
        $dados = $carrinhosModel->getTotalPrice($session->get('id'));

        return view('pagamento', $dados[0]);
    }

    public function confirmaPagamento($metodo)
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        }

        $comprasModel = new \App\Models\ComprasModel();
        $dueDate = time() + (6 * 24 * 60 * 60);
        $status = 'pendente';
        $forma_pgt_map = [
            'credito' => 1,
            'boleto' => 2
        ];

        if ($metodo == 'credito') {
            $status = 'pago';
        };

        $res = $comprasModel->finalizarCompra([
            'id_usuario' => $session->get('id'),
            'forma_pgt' => $forma_pgt_map[$metodo],
            'parcelas' => $_POST['parcelas'],
            'vencimento' => date('Y-m-d', $dueDate),
            'status' => $status
        ]);

        if ($res) return redirect('carrinho');
        return redirect('pagamento');
    }
}
