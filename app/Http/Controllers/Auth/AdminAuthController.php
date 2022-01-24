<?php

namespace App\Http\Controllers\Auth;

use Dotenv\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Admin;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Auth;

class AdminAuthController extends Controller
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


    protected $redirectTo = '/admin/login';


    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }

    public function getLogin()
    {
//        dd('test');
        return view('auth.login');
    }


    public function postLogin(Request $request)
    {


//        dd('test');

//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);


        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
//            dd('test');

            $user = auth()->guard('admin')->user();

            \Session::put('success','You are Login successfully!!');
            return redirect()->route('dashboard');

        } else {
            return back()->with('error','your username and password are wrong.');
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|void
     */
    public function logout()
    {
        auth()->guard('admin')->logout();
        \Session::flush();
        \Sessioin::put('success','You are logout successfully');
        return redirect(route('adminLogin'));
    }
}
