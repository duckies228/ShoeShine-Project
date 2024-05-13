<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;

class Authcontroller extends Controller
{

   public function index()
   {
      if (Auth::id() > 0) {
         return redirect()->route('dashboard.index');
      }
      return view('backend.auth.login');
   }
   public function login(AuthRequest $request)
   {
      $credentials = [
         'email' => $request->input('email'),
         'password' => $request->input('password')
      ];
      if (Auth::attempt($credentials)) {
         return redirect()->route('dashboard.index')->with('success', 'Đăng Nhập Thành Công');
      } else
         return redirect()->route('auth.admin')->with('error', 'Email Hoặc Mật Khẩu Không Chính Xác');
   }
   public function logout(Request $request): RedirectResponse
   {
       Auth::logout();
    
       $request->session()->invalidate();
    
       $request->session()->regenerateToken();
    
       return redirect()->route('auth.admin');
   }
}
