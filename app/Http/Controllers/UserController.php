<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $title = 'User';
        $users = User::orderBy('id', 'DESC')->get();
        return Inertia::render('User/Index', [
            'title' => $title,
            'users' => $users
        ]);
    }

    public function show(User $user){
        // $user = User::find($id);
        $title = 'Profile';
        return Inertia::render('User/Details', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function create(){
        $title = 'Register';
        return Inertia::render('User/Register', [
            'title' => $title,
        ]);
    }

    public function store(Request $request){
        //1
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        //2
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($request->all());

        return Redirect::route('user.index')->with('message', 'User Created');
    }

    public function edit($id){
        $title = 'Edit Profile';
        $user = User::find($id);
        return Inertia::render('User/Edit', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return Redirect::route('user.index')->with('message', 'User Updated');
    }

    public function destroy($id){
        User::destroy($id);

        return Redirect::route('user.index')->with('message', 'User Deleted');
    }
}
