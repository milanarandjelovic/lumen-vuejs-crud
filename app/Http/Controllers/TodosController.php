<?php

namespace App\Http\Controllers;

use App\Todos;

class TodosController extends Controller
{
    public function index()
    {
        return response()->json(Todos::get());
    }
}