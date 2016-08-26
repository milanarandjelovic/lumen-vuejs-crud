<?php

namespace App\Http\Controllers;

use App\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{

    public function index()
    {
        return response()->json(Todos::get());
    }

    public function store(Request $request)
    {
        // return a JSON response with the relevant error messages
        $validator = $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required|min:3|max:255'
        ]);

        Todos::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
    }
    
    public function destroy($id)
    {
        $todo = Todos::find($id);
        $todo->delete();
    }
}
