<?php

namespace App\Http\Controllers;
use App\Models\Forums;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //
    public function create(Request $request){
        $validatedData = $request->validate(Forums::$rules);
        if($validatedData){
            Forums::create([
                'title' => 'value1',
                'description' => '',
                // ...
            ]);
        }
        return redirect('/')->width(session('error'));
    }
}
