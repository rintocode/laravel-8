<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index_view ()
    {
        $this->authorize('manage users');
        return view('pages.user.user-data', [
            'user' => User::class
        ]);
    }
}
