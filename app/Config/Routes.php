<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(static function () {
    echo view('pages/404/index');
});
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Website\Home::index', ['as' => 'website.home.index']);

// Thanks route
$routes->get('gracias', 'Website\Thanks::index', ['as' => 'website.thanks.index']);

// Politics Privacy route
$routes->get('aviso-de-privacidad', 'Website\Privacy::index', ['as' => 'website.privacy.index']);

// Use Politics Cookies route
$routes->get('politicas-de-uso', 'Website\Cookies::index', ['as' => 'website.cookies.index']);

// Use Promotions route
$routes->get('promociones', 'Website\Promotions::index', ['as' => 'website.promotions.index']);

// Use Contact route
$routes->get('contacto', 'Website\Contact::index', ['as' => 'website.contact.index']);

// Use About us routes
$routes->group('distribuidor-pinturas', static function ($routes) {
    $routes->get('', 'Website\About::index', ['as' => 'website.about.index']);
    $routes->get('tecnologia-mapla', 'Website\Technology::index', ['as' => 'website.technology.index']);
});

// Use Catalogue route
$routes->get('catalogo', 'Website\Catalogue::index', ['as' => 'website.catalogue.index']);
$routes->get('preguntas-frecuentes', 'Website\Questions::index', ['as' => 'website.questions.index']);

// Use product by type
$routes->group('productos-por-tipo', static function ($routes) {
    $routes->get('', 'Website\TypeProducts::index', ['as' => 'website.typeProducts.index']);
    // Here will be the other types in a dynamic way (here is just a one single view to see it in phase 1)
    $routes->get('pinturas-especiales', 'Website\Type::index', ['as' => 'website.type.index']);
});


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
