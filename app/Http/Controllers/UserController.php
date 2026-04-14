<?php

namespace App\Http\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::where('level_id', 2)->count();

        return view('user', ['data' => $user]);
    }

    public function profile($id, $name)
    {
        return view('user.profile', compact('id', 'name'));
    }
}
