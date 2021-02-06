<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('show', ['usuario' => $user]);
    }
    public function showOne($search){
        $user = User::findOrFail($search);
        return view('showOne', ['usuario' => $user]);
    }
}
