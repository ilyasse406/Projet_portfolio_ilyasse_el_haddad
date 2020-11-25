<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        
        $users=User::all();
        $facts=Fact::all();
        return view("admin", compact("users", "facts"));
    }
}
