<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/', 'Home::index');
//matrciula 
/*
$routes->get('matricula','MatriculaController::index');// bug acces 
$routes->post('matricula','MatriculaController::index_post');
*/$routes->get('/', 'Home::index');




    $routes->get('public/login','LoginController::log');
    $routes->post('public/login','LoginController::log_post');
    
    $routes->get('public/login_code','LoginController::login_code');
    $routes->post('public/login_code','LoginController::login_code_post');
    $routes->get('public/error_pre','loginController::login_code_error'); 
    



    $routes->get('matricula/', 'MatriculaController::matricula_view');
    $routes->post('matricula/', 'MatriculaController::matricula_post');

    $routes->get('matricula/datos_alumne','MatriculaController::m_alumne_view');
    $routes->post('matricula/datos_alumne','MatriculaController::m_alumne_post');

    $routes->get('matricula/datos_curs','MatriculaController::m_curs_view');
    $routes->post('matricula/datos_curs','MatriculaController::m_curs_post');
    
    $routes->get('matricula/pago','MatriculaController::pago_view');
    $routes->post('matricula/pago','MatriculaController::pago_post');
     
    $routes->get('matricula/pago/pdf','MatriculaController::generar_pdf');



$routes->get('matricula/datos_alumne','MatriculaController::m_alumne_view');
$routes->post('matricula/datos_alumne','MatriculaController::m_alumne_post');
$routes->get('matricula/datos_pagament','MatriculaController::m_pagament_view');
$routes->post('matricula/datos_pagament','MatriculaController::m_pagament_post'); 
//---------------------------------------------------------------------------------------------------------
//privada 
//crud Cursos  

$routes->get('privat/cursos', 'CursController::index',['filter' => 'auth']);
$routes->get('privat/cursos/create', 'CursController::create',['filter' => 'auth']);
$routes->post('privat/cursos/store', 'CursController::store',['filter' => 'auth']);

$routes->get('privat/cursos/edit/(:num)', 'CursController::edit/$1',['filter' => 'auth']);
$routes->post('privat/cursos/update/(:num)', 'CursController::update/$1',['filter' => 'auth']);

$routes->get('privat/cursos/delete/(:num)', 'CursController::delete/$1',['filter' => 'auth']);

//Tanda y Dash  


$routes->get('privat/Dashboard/Instiut-Caparrella','MatriculaController::Dashborad_view');
$routes->get('privat/Tandada','TandaController::Tanda_view'); 
$routes->get('privat/Tandada/create','TandaController::T_create'); 
$routes->post('privat/Tandada/create','TandaController::T_post'); 

$routes->get('privat/Tandada/edit/(:segment)','TandaController::T_edit/$1',['filter' => 'auth']); 
$routes->post('privat/Tandada/edit/(:segment)','TandaController::T_edit_post/$1',['filter' => 'auth']); 
$routes->post('privat/tandada/eliminar/(:segment)','TandaController::T_delete/$1',['filter' => 'auth']);

//GESTION USERS 

$routes->get('privat/Users/list','UsersController::user_list') ; 
$routes->get('privat/Users/create','UsersController::U_create'); 
$routes->post('privat/Users/create','UsersController::U_post'); 

$routes->get('privat/Users/edit/(:segment)','UsersController::U_edit/$1',['filter' => 'auth']); 
$routes->post('privat/Users/edit/(:segment)','UsersController::U_edit_post/$1',['filter' => 'auth']); 
$routes->post('privat/Users/eliminar/(:segment)','UsersController::U_delete/$1',['filter' => 'auth']);
//matriculas 
$routes->get('privat/Matriculas/listado','MatriculaController::Matricula_list',['filter' => 'auth']) ; 
$routes->get('privat/Matriculas/Manual/crear','MatriculaController::crear_matricula',['filter' => 'auth']); 
$routes->post('privat/Matriculas/Manual/crear','MatriculaController::crear_matricula_post',['filter' => 'auth']); 
$routes->get('privat/Matriculas/Manual/edit/(:segment)','MatriculaController::edit_matricula/$1',['filter' => 'auth']); 
$routes->post('privat/Matriculas/Manual/edit/(:segment)','MatriculaController::edit_matricula_post/$1',['filter' => 'auth']); 
$routes->post('privat/Matriculas/eliminar/(:segment)','MatriculaController::matricula_delete/$1',['filter' => 'auth']) ;
$routes->post('privat/Matriculas/restaurar/(:segment)', 'MatriculaController::matricula_recup/$1',['filter' => 'auth']); 
$routes->get('privat/Matriculas/papelera', 'MatriculaController::matricula_papelera',['filter' => 'auth']);

 $routes->get('admin/matricula/create', 'MatriculaController::crear',['filter' => 'auth']);
$routes->post('admin/matricula/create', 'MatriculaController::crear_post',['filter' => 'auth']);
  $routes->get('matricula/edit/(:num)', 'AdminMatriculaController::edit/$1');
    $routes->post('matricula/update/(:num)', 'AdminMatriculaController::update/$1');
//Buscador 
$routes->get('privat/Matriculas/searchMatricula','MatriculaController::search',['filter' => 'auth']);


//validar Alumnos 
$routes->get('privat/Matriculas/matricula/validar/(:segment)','MatriculaController::Matricula_validar/$1',['filter' => 'auth']) ; 
$routes->post('privat/Matriculas/matricula/validar/(:segment)','MatriculaController::Matricula_validar_post/$1',['filter' => 'auth']) ; 
//
// BONIFICACIONES
$routes->get('privat/Bonificaciones', 'BonificacionesController::bonificaciones_view',['filter' => 'auth']);

$routes->get('privat/Bonificaciones/create', 'BonificacionesController::B_create',['filter' => 'auth']);
$routes->post('privat/Bonificaciones/post', 'BonificacionesController::B_post',['filter' => 'auth']);

$routes->get('privat/Bonificaciones/edit/(:num)', 'BonificacionesController::B_edit/$1',['filter' => 'auth']);
$routes->post('privat/Bonificaciones/update/(:num)', 'BonificacionesController::B_edit_post/$1',['filter' => 'auth']);

$routes->get('privat/Bonificaciones/delete/(:num)', 'BonificacionesController::B_delete/$1',['filter' => 'auth']);

$routes->get('privat/Bonificaciones/view/(:num)', 'BonificacionesController::B_view/$1',['filter' => 'auth']);

// REDUCCIONES
$routes->get('privat/Reducciones', 'ReduccionesController::reducciones_view',['filter' => 'auth']);

$routes->get('privat/Reducciones/create', 'ReduccionesController::R_create',['filter' => 'auth']);
$routes->post('privat/Reducciones/post', 'ReduccionesController::R_post',['filter' => 'auth']);

$routes->get('privat/Reducciones/edit/(:num)', 'ReduccionesController::R_edit/$1',['filter' => 'auth']);
$routes->post('privat/Reducciones/update/(:num)', 'ReduccionesController::R_edit_post/$1',['filter' => 'auth']);

$routes->get('privat/Reducciones/delete/(:num)', 'ReduccionesController::R_delete/$1',['filter' => 'auth']);

$routes->get('privat/Reducciones/view/(:num)', 'ReduccionesController::R_view/$1',['filter' => 'auth']);

//Auth  
         
$routes->get('Admin/Auth/Login','AuthController::login'); 
$routes->post('Admin/Auth/Login','AuthController::login_post'); 
$routes->get('Admin/Auth/logout','AuthController::logout',['filter' => 'auth']); 
