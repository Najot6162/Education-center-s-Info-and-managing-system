<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit(){

        return view('users/edit');
    }
    public function update(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:posts',
            'old_password' =>'required',
            'new_password' => 'required'
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required and Unique',
        ]);

        $current_user = auth()->user();

        if (Hash::check($request->old_password,$current_user ->password)){
            auth()->user()->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->new_password)
            ]);
            return  redirect('/home')->with('message','Profile has been updated');
        }else{
            return redirect()->back()->with('message','Old password does not matched');;
        }



    }
}
