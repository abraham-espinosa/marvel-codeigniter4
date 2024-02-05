<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Character::getCharactersList');
$routes->post('/search', 'Character::getCharactersByString');
$routes->get('/getCharacter/(:any)', 'Character::getCharacterById/$1');
$routes->get('/delete/(:any)', 'Character::deleteCharacterById/$1');
$routes->post('/create', 'Character::createCharacter');
$routes->post('/update', 'Character::updateCharacterById');
$routes->get('/createForm', 'Character::createForm');

