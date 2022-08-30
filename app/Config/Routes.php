<?php

namespace Config;

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
$routes->get('/vitrine', 'Vitrine::index');
$routes->get('/carrinho', 'Carrinho::index');

$routes->post('/autenticar', 'AuthController::login');
$routes->post('/cadastrar/usuario/inserir', 'CadastroUsuario::inserir');
$routes->post('/cadastrar/lote/inserir', 'CadastroLote::inserir');
$routes->post('/cadastrar/livro/inserir', 'CadastroLivro::inserir');
$routes->post('/carrinho/inserir', 'Carrinho::insertItem');

$routes->get('/cadastrar/usuario/feedback/erro', 'Feedback::cadastrarUsuarioErro');
$routes->get('/cadastrar/livro/feedback/erro', 'Feedback::cadastrarLivroErro');
$routes->get('/cadastrar/lote/feedback/erro', 'Feedback::cadastrarLoteErro');

$routes->get('/cadastrar/usuario/feedback/sucesso', 'Feedback::cadastrarUsuarioSucesso');
$routes->get('/cadastrar/livro/feedback/sucesso', 'Feedback::cadastrarLivroSucesso');
$routes->get('/cadastrar/lote/feedback/sucesso', 'Feedback::cadastrarLoteSucesso');

$routes->get('/livros', 'Vitrine::livros');
$routes->get('/carrinhos/items', 'Carrinho::getItems');


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
