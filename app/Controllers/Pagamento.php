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

        return view('pagamento');
    }

    public function confirmaPagamento()
    {
        $session = session();
        if ($session->get('email') == null) {
            return redirect('/');
        }

        $comprasModel = new \App\Models\ComprasModel();
        $dueDate = time() + (6 * 24 * 60 * 60);
        $status = 'pendente';
        if ($_POST['forma_pgt'] == 1) $status = 'pago';

        $res = $comprasModel->finalizarCompra([
            'id_usuario' => $session->get('id'),
            'forma_pgt' => $_POST['forma_pgt'],
            'parcelas' => $_POST['parcelas'],
            'vencimento' => date('Y-m-d', $dueDate),
            'status' => $status
        ]);

        return redirect('carrinho');
    }
}
