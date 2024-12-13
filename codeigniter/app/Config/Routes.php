<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Signup::Signup');
$routes->post('/signup', 'Signup::Signup');
$routes->get('/login', 'Login::Login');
$routes->post('/login', 'Login::Login');
$routes->get('/logout', 'Logout::Logout');
$routes->post('/logout', 'Logout::Logout');
$routes->post('/auctions', 'Auction::create');
$routes->get('/auctions', 'Auction::list');

$routes->get('/auctions/(:num)', 'Auction::details/$1'); // Auction details by ID
$routes->post('/auctions/bid', 'Auction::placeBid'); // Place a bid
// $routes->get('/auctions/chat/(:num)', 'ChatController::auctionChat/$1'); // 