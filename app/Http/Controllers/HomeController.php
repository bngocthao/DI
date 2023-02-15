<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // login xong chuyển sang controller để trả về trang index có quyền của nhân vật
        $userId = Auth::id();
        $user = NguoiDung::where('id', $userId)->first();
        return view('admin.home', compact('user'));
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
