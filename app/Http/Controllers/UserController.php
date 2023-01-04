<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;

class UserController extends Controller
{
    // public function index(User $user)
    // {
    //     return view('users.index')->with(['posts' => $user->getByUser()]);
    // }
    
    public function index(User $user)
    {
        return view('users.index')->with(['own_posts' => $user->getOwnPaginateByLimit(), 'user' => $user]);
    }
}
