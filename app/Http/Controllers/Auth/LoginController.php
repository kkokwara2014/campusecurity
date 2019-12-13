<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'userLogout']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function userLogout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        
        return redirect(route('index'));
    }
    public function logout()
    {
        $this->guard()->logout();
        // $request->session()->invalidate();
        
        return redirect(route('index'));
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role_id == 1 || $user->role_id == 2) {
            return redirect('/dashboard');
        } else if ($user->role_id == 3) {
            return redirect('/');
        }
    }
}
