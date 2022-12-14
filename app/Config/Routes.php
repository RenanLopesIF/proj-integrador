<?php

namespace Config;

use App\Controllers\Pagamento;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/cadastrar/usuario', 'CadastroUsuario::index');
$routes->get('/cadastrar/lote', 'CadastroLote::index');
$routes->get('/cadastrar/livro', 'CadastroLivro::index');
$routes->get('/home', 'Home::index');
$routes->get('/carrinho', 'Carrinho::index');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/pagamento', "Pagamento::index");
$routes->get('/recuperarsenha', "RecuperarSenha::index");
$routes->get('/recuperarsenha/novasenha/(:num)', "RecuperarSenha::novaSenha/$1");
$routes->get('/manusearlivros', "ManusearLivros::index");
$routes->get('/editar/livro/(:num)', "EditaDados::livro/$1");
$routes->get('/editar/usuario/(:num)', "EditaDados::usuario/$1");

$routes->post('/autenticar', 'AuthController::login');
$routes->post('/cadastrar/usuario/inserir', 'CadastroUsuario::inserir');
$routes->post('/cadastrar/lote/inserir', 'CadastroLote::inserir');
$routes->post('/cadastrar/livro/inserir', 'CadastroLivro::inserir');
$routes->post('/carrinho/inserir', 'Carrinho::insertItem');
$routes->post('/pagamento/confirmar/(:alpha)', 'Pagamento::confirmaPagamento/$1');
$routes->post('/recuperarsenha/enviaremail', 'RecuperarSenha::enviarEmail');
$routes->post('/recuperarsenha/alterarsenha', 'RecuperarSenha::atualizarSenha');
$routes->post('/atualizar/livro/(:num)', 'AtualizaDados::livro/$1');
$routes->post('/atualizar/usuario/(:num)', 'AtualizaDados::usuario/$1');

$routes->get('/livros', 'Home::livros');
$routes->get('/carrinho/items', 'Carrinho::getItems');
$routes->get('/carrinho/remover/(:num)', 'Carrinho::removeItem/$1');

// mudar


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
