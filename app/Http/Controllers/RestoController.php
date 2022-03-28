<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Models\User;


class RestoController extends Controller
{
    //
    function index()
    {
        $Users = User::all();

        return view('home')->with('Users',$Users);
       
    }
    function addUser()
    {
        return view('user.create');
    }

    function saveUser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->price = $request->price;
        $user->description = $request->description;
        $user->publish = $request->publish;
        $user->save();
        return redirect('/');
    }

    function viewUser($id)
    {
        $user= User::find($id);
        return view('user.view')->with ('user',$user);
    }

    function editUser($id)
    {
        $user= User::find($id);
        return view('user.edit')->with('user',$user);
    }

    function deleteUser($id)
    {
        User::find($id)->delete();
        return redirect('/');
    }

    function saveEdit($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->price = $request->price;
        $user->description = $request->description;
        $user->publish = $request->publish;
        $user->save();
        return redirect('/');
    }
    
    function searchUser(Request $request)
    {
        $Users=User::where([['name','like','%'.$request->keyword.'%']])->get();
        return view('home')->with('Users',$Users);
    }
}
