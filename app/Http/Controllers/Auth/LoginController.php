<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request ;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;

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
    protected $redirectTo = '/home';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     
  * @param  \Illuminate\Http\Request  $request
     * @return void
     */
  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    public function name()
    {
        return 'name';
        
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->name() => 'required|string',
            'password' => 'required|string',
        ]);
    }
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }
    protected function credentials(Request $request)
    {
        // if(is_numeric($request->name)){
        //     return ['mobile'=>$request->email, 'password'=>$request->password];
        //     }elseif(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
        //     return ['email'=>$request->email, 'password'=>$request->password];
        //     }
            
        return [
            $this->name() => $request->get($this->name()),
            'password' => $request->get('password'),
        ];
    }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->name() => [trans('auth.failed')],
        ]);
    }
}

