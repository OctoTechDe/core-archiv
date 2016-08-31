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

    /*
    * Store user
    */
    public function createUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users|max:100',
            'email' => 'required'
        ]);

        // Initalize new user
        $user = New User;

        // Get the inputs
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        // Save the user
        $user->save();

        return $user;
    }
}
