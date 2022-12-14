<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        if ($request->session()->get('attempt') == '3') {
            $request->validate([
                $this->username() => 'required|string',
                'password' => 'required|string',
                'h-captcha-response' => 'required|HCaptcha'
            ]);
        }

        if ($request->session()->get('attempt') == '2') {
            $request->session()->put('attempt', '3');
            $request->validate([
                $this->username() => 'required|string',
                'password' => 'required|string',
            ]);
        }

        if ($request->session()->get('attempt') == '1') {
            $request->session()->put('attempt', '2');
            $request->validate([
                $this->username() => 'required|string',
                'password' => 'required|string',
            ]);
        }

        if (empty($request->session()->get('attempt'))) {
            $request->session()->put('attempt', '1');
            $request->validate([
                $this->username() => 'required|string',
                'password' => 'required|string',
            ]);
        }
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'nim';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}