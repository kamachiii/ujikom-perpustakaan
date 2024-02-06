<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerAction(Request $request)
    {
        $req = $request->all();
        $req['password'] = Hash::make($req['password']);
        try {
            $user = User::create([
                'username' => $req['username'],
                'nama_lengkap' => $req['nama_lengkap'],
                'email' => $req['email'],
                'password' => $req['password'],
                'alamat' => $req['alamat']
            ]);
            return redirect()->route('login');
        } catch (\Exception $e) {
            return response()->json($e, 401);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $req = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        try {
            $user = User::where('username', $req['username'])->first();
            if ($user) {
                if (Hash::check($req['password'], $user->password)) {
                    Auth::attempt($req);
                    Alert::success('Success!', 'Login successfully');
                    return redirect()->route('dashboard-' . Auth::user()->role);
                } else {
                    Alert::error('Error!', 'Password wrong');
                    return redirect()->back();
                }
            } else {
                Alert::error('Error!', 'Username not registered');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Alert::error('Error!', 'Login failed');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
