<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $users=User::all();
        $facts=Fact::all();
        
        return view("welcome", compact("users", "facts"));
    }
}
