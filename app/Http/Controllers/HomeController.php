<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        if (Gate::allows('isAdmin',auth()->user())) {
            return view ('admin');
        }
        else {
            abort(403);
        }
    }
}
