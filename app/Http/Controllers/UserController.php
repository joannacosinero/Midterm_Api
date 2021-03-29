<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        
        return User::create($request->all());
    }

    public function show($user)
    {
        //show a post
        return User::find($user);
    }

    public function update(Request $request, $user)
    {
        //update a post

      $user = User::find($user);
      $user->update($request->all());

      return $user;
    }

    public function destroy($user)
    {
        return User::destroy($user);
    }

    public function byUser(User $user){
        return User::with('products','orderitems')->where('users.id', $user->id)->get();
    }
    
}
