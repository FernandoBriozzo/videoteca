<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller
{
    public function create() {
        return view ('sessions.create');
    }

    public function store(Request $request) {
        if (!auth()->attempt(['email'=> $request->email, 'password' =>$request->password])) {
            return redirect('/login');
        } else {
            return redirect('/');
        }
    }

    public function destroy() {
        auth()->logout();

        return redirect()->home();
    }
}
