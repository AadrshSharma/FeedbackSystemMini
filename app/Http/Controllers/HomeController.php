<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function saved(){
        return Inertia::render('Create');
    }
    public function view(){
        return Inertia::render('view');
    }
    public function edit($id){
        $data = Feedback::where('id', $id)->first();
        return Inertia::render('edit');
    }
}
