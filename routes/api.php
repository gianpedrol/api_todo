<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function () {
    return [
        'pong' => true,
    ];
});
//CRUD do Todo

//CREATE - Criar Tarefa
//READ - LER TAREFA
//UPDATE - ATUALIZAR
//DELETE - DELETAR

//POST /todo = inserir uma tarefa
Route::post('/todo',[ApiController::class,'createTodo']);

//GET /todos = Listar todas tarefas
Route::get('/todos',[ApiController::class,'readAllTodos']);

//GET/todos/2=Ler uma tarefa especifica
Route::get('/todo/{id}',[ApiController::class, 'readTodo']);

//PUT /todo/1 = Atualizar Tareda
Route::put('/todo/{id}',[ApiController::class, 'updateTodo']);


//DELE /todo/2 = Deletar uma tarefa
Route::delete('/todo/{id}',[ApiController::class, 'deleteTodo']);
