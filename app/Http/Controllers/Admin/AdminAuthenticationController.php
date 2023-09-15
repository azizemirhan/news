<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HandleLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminAuthenticationController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    
    public function handleLogin(HandleLoginRequest $request){

       $request->authenticate();

       return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request) : RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
     }
}
 