<?php

namespace App\Http\Controllers\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Http\Requests\RequestLogin;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('guest')->except('logout');
    }

    public function getFormLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        // dd($request->all());
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:1'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            $params = $request->only('email','password');
            if( Auth::attempt($params)) {
                $level = auth()->user()->role;
                if($level == 2)
                    return redirect('/');
                else {
                        return redirect('/');
                }
            }

            else {
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('/account/login');
            }
        }
    }



        // $allRequest  = $request->all();
        // $validator = $this->validator($allRequest);
        // if ($validator->fails()) {
        //     return redirect('login')->back()->withErrors($validator)->withInput();
        // } else {
        //     $params = $request->only('email','password');
        //     if( Auth::attempt($params)) {
        //         return redirect('/');
        //     }
        //     else {
        //         return redirect('/login');
        //     }
        // }
        // $params = $request->only('email','password');
        // if( Auth::attempt($params)) {
        //     return redirect('/');
        // }
        // return redirect()->back();
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         // 'password' => ['required', 'string', 'min:4'],
    //     ]);
    // }

    // public function getLogout(){
    //     Auth::logout();
    //     return redirect()-> to('/');
    // }

