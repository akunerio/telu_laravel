<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SiteController extends Controller
{
    public function addUser() {
        $usr = new User();
        $usr->name = 'Nur';
        $usr->email = 'nur2@gmail.com';
        $usr->password = bcrypt('pass');
        $usr->save();
    }

    public function auth(Request $req) {

        if (Auth::attempt(['email' => $req->em, 'password' => $req->pwd])) {
            return redirect('/product');
        }
        return redirect('/login')->with('msg', 'Email / password salah');
      }

}
