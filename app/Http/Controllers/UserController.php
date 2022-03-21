<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUser(Request $request){

        if($request->input('search')){
            $users = User::where('username','like','%' .request('search'). '%')->get();
        } else{
            $users = User::all();
        }

        return view('admin.admin-user', compact('users'));
    }

    public function getUpdateUser($id){
        $user = User::findOrFail($id);

        return view('member.member-update', ['user'=>$user]);
    }

    public function updateUser(Request $request ,$id){
        $user = User::findOrFail($id);

        $user->update([
            'username' => $request -> username,
            'email' => $request-> email,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'telephone' => $request->telephone,
        ]);

        return redirect(route('member'));
    }

    public function changePassword(Request $request, $id){
        $user = User::findOrFail($id);

        //masih testing
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request);
        }

        $user->update([
            'password' => $request -> password
        ]);
    }

    public function deleteUser($id){
        User::destroy($id);

        return redirect(route('admin-user'));
    }
}
