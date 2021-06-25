<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserConttroller extends Controller {

    public function index() {
        $users = User::paginate(5);
        return view(
            'users.index',
            compact(
                'users'
            )
        );
    }

    public function create() {
        return view(
            'users.create'
        );
    }

    public function store( Request $request ) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:8',
        ]);

        $store = $request->only('name','email','phone');
        $store['password'] = Hash::make($request->password);
        $store['password_base64'] = base64_encode($request->password);
        $user = User::create( $store );
        return redirect()->route('user.index')->with('success','Record added successfully.');;
    }

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $user = User::find( $id )->delete();
        return redirect()->route('user.index')->with('success','Record deleted successfully.');;
    }
}
