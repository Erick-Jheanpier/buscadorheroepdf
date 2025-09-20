<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página principal
$routes->get('/', 'SuperheroeController::index');

// Búsqueda AJAX
$routes->get('superheroes/search', 'SuperheroeController::search');

// Exportar PDF (nombre del superhéroe como parámetro)
$routes->get('superheroes/exportPdf/(:any)', 'SuperheroeController::exportPdf/$1');



