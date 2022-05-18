<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
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
//    protected $redirectTo = '/home';

    /**
     * Override:: definisce la homepage per i diversi utenti.
     *
     * @var string
     */
    protected function redirectTo() {        
        $livello = auth()->utente()->livello;
        switch ($livello) {
            case 'admin': return '/admin';
                break;
            case 'locatario': return '/locatario';
                break;
            case 'locatore': return '/locatore';
                break;
            default: return '/';
        };
    }

    /**
     * Override:: Login con 'username' al posto di 'email'.
     *
     */
    public function username() {
        return 'username';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

}
