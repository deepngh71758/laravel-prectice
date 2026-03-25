<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    //  public function show(string $id): View
    //     {
    //         return view('user.profile', [
    //             'user' => User::findOrFail($id)
    //         ]);
    //     }

    public function first()
        {
            return view('/first');
        }
    
        public function second(?string $id=null)
        {
            return view('/second',compact('id'));
        }
}
