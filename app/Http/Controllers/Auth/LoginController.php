<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use app\Models\NguoiDung;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

        // overide login method

    protected function attemptLogin(Request $request)
    {
        $result = DB::table('NguoiDung')
                                ->where('email', $request->email)
                                ->where('mat_khau', $request->password)
                                ->get(); 
        if ($result != null) {
            return $this->guard()->attempt(
                $this->credentials($request), $request->filled('remember')
            );
        }
    }

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

//     public function authenticate(Request $request)
//     {
//         $user = new NguoiDung();
//         Auth::login($user);
// }
}