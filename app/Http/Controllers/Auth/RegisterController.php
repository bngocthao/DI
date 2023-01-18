<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\NguoiDung;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'ho_ten' => ['required', 'string', 'max:255'],
            'ma_nguoi_dung' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:NguoiDung'],
            'ten_dang_nhap' => ['required', 'string', 'max:255', 'unique:NguoiDung','regex:/^[a-zA-Z0-9]+$/'],
            'mat_khau' => ['required', 'string', 'min:8'],
            'password_confirmation' => 'required|same:mat_khau|min:8'
        ], [
            'ten_dang_nhap.regex' => 'Tên dăng nhập không được có ký tự đặc biệt.',
            'email.unique' => 'Địa chỉ email đã tồn tại.',
            'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại.',
            'mat_khau.min' => 'Mật khẩu phải có ít nhất 8 chữ số',
            // 'password_confirmation.!same' => 'Mật khẩu xác nhận không khớp',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $ma_nguoi_dung = Str::random(8);
        return NguoiDung::create([
            'ten_dang_nhap' => $data['ten_dang_nhap'],
            'ma_nguoi_dung' => $data['ma_nguoi_dung'],
            'ho_ten' => $data['ho_ten'],
            'email' => $data['email'],
            'mat_khau' => Hash::make($data['mat_khau']),
        ]);
    }
}
