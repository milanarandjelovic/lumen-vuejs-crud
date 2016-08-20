<?php

$app->get('/', function () use ($app) {
    return view('index');
});


$app->group(['prefix' => 'api'], function () use ($app) {
    $app->get('/todos', ['as' => 'todos.index', 'uses' => '\App\Http\Controllers\TodosController@index']);
});