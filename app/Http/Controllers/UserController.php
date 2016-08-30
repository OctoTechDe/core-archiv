<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    /*
     * Return view index
     */
    public function index()
    {
        return view('users.index');
    }

    /*
     * Return all users
     */
    public function getUsers()
    {
        $users = User::get();

        return $users;
    }
}
