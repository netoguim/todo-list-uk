<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;



Route::get('/ping', function(){
    return ['pong' => true];
});


//CRUD do todo 

//POST /todo = INSERIR TAREFA
//GET /todos = LER TODAS AS TAREFAS DO SISTEMA
//GET /todo/2 = LER UMA TAREFA ESPECÍFICA DO SISTEMA 
//PUT /todo/2 = ATUALIZAR UMA TAREFA NO SISTEMA
//DELETE /todo/2 = DELETAR UMA TAREFA NO SISTEMA

Route::post('/todo', [ApiController::class, 'createTodo']);
Route::get('/todos', [ApiController::class, 'readAllTodos']);
Route::get('/todo/{id}', [ApiController::class, 'readTodo']);
Route::put('/todo/{id}', [ApiController::class, 'updateTodo']);
Route::delete('/todo/{id}', [ApiController::class, 'deleteTodo']);