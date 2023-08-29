<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login', ['as' => 'admin-login', 'namespace' => 'App\Controllers\Admin']);
$routes->get('admin', 'Auth::login', ['as' => 'admin-login', 'namespace' => 'App\Controllers\Admin']);
$routes->post('admin', 'Auth::attemptToLogin', ['namespace' => 'App\Controllers\Admin']);
$routes->group('admin', ['filter' => 'auth',  'namespace' => 'App\Controllers\Admin'], static function ($routes) {
    $routes->get('logout', 'Auth::logout', ['as' => 'logout']);
    $routes->get('dashboard', 'Dashboard::renderDashboard', ['as' => 'dashboard']);
    $routes->get('super-admin', 'Users::superAdmin', ['as' => 'superAdmin']);
    $routes->post('users/ajax-get-super-admin-list', 'Users::fetchSuperAdminDt');
    $routes->post('users/save-super-admin', 'Users::addNewSuperAdmin');
    $routes->get('users/fetch-super-admin-details/(:num)', 'Users::fetchSuperAdminDetails/$1');
    $routes->post('users/update-super-admin', 'Users::updateSuperAdmin');
    $routes->post('users/delete-super-admin', 'Users::deleteSuperAdmin');
    $routes->post('users/update-password', 'Users::updatePassword');
    $routes->get('users/change-status', 'Users::changeStatus');
    $routes->post('users/update-admin-password', 'Auth::updatePassword');
    $routes->post('users/update-admin-profile', 'Users::updateAdminProfile');
    $routes->get('users/fetch-admin-details', 'Users::fetchAdminDetails');

    $routes->get('ad-post', 'Advertisement::adPost', ['as' => 'ad-post']);
    $routes->post('ad-post/save-ad', 'Advertisement::saveAd', ['as' => 'post-new-ad']);
    $routes->post('ad-post/ajax-get-ad-posts', 'Advertisement::fetchAdPostDt');
    $routes->get('ad-post/change-status', 'Advertisement::changeStatus');
    $routes->post('ad-post/delete-ad', 'Advertisement::deleteAdvertisement');
    $routes->get('ad-post/fetch-ad-post-details/(:num)', 'Advertisement::fetchAdPostDetails/$1');
    $routes->post('ad-post/update-ad', 'Advertisement::updateAd', ['as' => 'update-ad']);

    $routes->get('radio', 'Radio::radioList', ['as' => 'radio']);
    $routes->post('radio/ajax-get-radio-list', 'Radio::fetchRadioList');
    $routes->post('radio/save-radio', 'Radio::saveRadio', ['as' => 'add-new-radio']);
    $routes->get('radio/change-status', 'Radio::changeStatus');
    $routes->post('radio/delete-radio', 'Radio::deleteRadio');
    $routes->get('radio/fetch-radio-details/(:num)', 'Radio::fetchRadioDetails/$1');
    $routes->post('radio/update-radio', 'Radio::updateRadio', ['as' => 'update-radio']);
});

