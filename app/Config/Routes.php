<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->add('homepage','Home::index');

$routes->get('forumhome', 'Forum::index');
$routes->post('forum/addforum', 'Forum::addforum');

$routes->get('login', 'Login::index');

$routes->post('registration/child','Register::store/kid');
$routes->post('registration/parent','Register::store/parent');

$routes->post('signin','Login::signin');
$routes->get('register', 'Register::index');

$routes->add('regoptions','Register::regpick');
$routes->add('parentregister','Register::parentpage');
$routes->add('childregistration_pg','Register::childpage');

$routes->get('logout', 'Login::logout');

$routes->get('parenthome','ParentController::index');
$routes->get('review', 'Review::index');
$routes->post('add_rating','Review::reviews');
$routes->get('Star_rating', 'Star_rating::index');
$routes->get('reviews','Review::reviews');


$routes->get('adminhome','Admin\AdminController::index');
$routes->get('uploads','Admin\AdminController::new_uploads');
$routes->add('addcontent/(:any)','Admin\AdminController::uploadforms/$1');
$routes->post('uploadinfo','Admin\AdminController::uploadinfo');
$routes->post('uploadquiz','Admin\AdminController::uploadquizes');



$routes->get('forums','Admin\AdminController::forums');
$routes->get('users','Admin\AdminController::users');
$routes->get('add-user','Admin\AdminController::useradd');
$routes->post('user-add/admin','Admin\AdminController::add/admin');
$routes->post('user-add/parent','Admin\AdminController::add/parent');
$routes->post('user-add/kid','Admin\AdminController::add/kid');
$routes->add('delete-user/(:num)/(:num)','Admin\AdminController::delete/$1/$2');
$routes->add('view-user/(:num)/(:num)','Admin\AdminController::view_profile/$1/$2');


$routes->post('update/admin','Admin\AdminController::update_user/admin');
$routes->post('update/parent','Admin\AdminController::update_user/parent');
$routes->post('update/kid','Admin\AdminController::update_user/kid');

$routes->add('forumdets/(:num)','Admin\AdminController::forumdetails/$1');
$routes->post('admindeletecomment/(:num)/:(num)','Admin\AdminController::deletecomment/$1/$2');
$routes->add('deleteforum/(:num)','Admin\AdminController::deleteforum/$1');
$routes->get('flagged_users','Admin\AdminController::flagged_users');


$routes->add('p-view-user/(:num)','ParentController::view_profile/$1');
$routes->get('p-add-user','ParentController::useradd');
$routes->post('p-user-add','ParentController::add');
$routes->add('p-delete-user/(:num)/(:num)','ParentController::delete/$1/$2');








// $routes->put('update-user/parent','Admin\AdminController::update_user/parent');
// $routes->put('update-user/kid','Admin\AdminController::update_user/kid');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
