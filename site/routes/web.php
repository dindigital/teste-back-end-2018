<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '/'],function(){

	Route::get('/','HomeController@index');
	Route::get('/medico/{id}','MedicosController@dadosMedico');
	Route::get('/contato','HomeController@index');
	Route::post('/contato','FormulariosController@enviar');
	Route::get('/sucesso','HomeController@sucesso');
	Route::get('/api/medicos/{id?}','MedicosController@show');



});


Route::group(['prefix' => 'admin'], function () {
 	//ROTAS PARA O ADMINISTRATIVO
	Route::get('/', 'AdminController@index')->middleware('auth');
	//Medicos
	Route::get('/medicos', 'MedicosController@indexAdmin')->middleware('auth');
	Route::get('/medicos/cadastrar', 'MedicosController@cadastrar')->middleware('auth');
	Route::post('/medicos/cadastrar', 'MedicosController@inserir')->middleware('auth');
	Route::post('/medicos/excluir', 'MedicosController@excluir')->middleware('auth');
	Route::get('/medicos/editar/{id}', 'MedicosController@alterar')->middleware('auth');
	Route::put('/medicos/editar', 'MedicosController@editar')->middleware('auth');
	//Especialidades
	Route::get('/especialidades', 'EspecialidadesController@indexAdmin')->middleware('auth');
	
	Route::get('/especialidades/cadastrar', 'EspecialidadesController@cadastrar')->middleware('auth');
	Route::post('/especialidades/cadastrar', 'EspecialidadesController@inserir')->middleware('auth');

	//Contato
	Route::get('/contato', 'FormulariosController@listar')->middleware('auth');
});

Auth::routes(['verify'=>false]);
