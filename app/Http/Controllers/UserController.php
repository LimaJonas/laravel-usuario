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
    public function showOne(Request $request){
        $search = $request->input('search');

        $user = User::query()->where('nome', 'LIKE', "%{$search}%")->orWhere('sobrenome', 'LIKE', "%{$search}%")->get();
        return view('showOne', ['usuario' => $user]);
    }
}
