<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'BarangController::index');
$routes->get('barang', 'BarangController::index');
$routes->get('barang/tambah', 'BarangController::tambah');
$routes->post('barang/add', 'BarangController::add');
$routes->get('barang/edit/(:any)', 'BarangController::edit/$1');
$routes->post('barang/update', 'BarangController::update');
$routes->get('barang/hapus/(:any)', 'BarangController::hapus/$1');