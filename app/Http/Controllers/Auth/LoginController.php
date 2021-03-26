<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\User;
use App\users;

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
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function postlogin(Request $request){
        if(Auth::check()){
            return redirect()->route('index');
        }else{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                // $user = users::where('email',$request->email);
                if($request->email=='admin@gmail.com'||$request->email=='employee1@gmail.com'||$request->email=='employee2@gmail.com'){
                    return redirect()->route('indexdashboard');
                    echo "<script type='text/javascript'>alert('Đăng nhập thành công trang quản trị ');</script>";
                }
                else{
                    return redirect()->route('index');
                    echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
                }   
            }
            else{
                return redirect()->route('index');
            }
        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('index');
        }else{
            return redirect()->route('index');
        }
    }

    public function register(Request $request){
        if($request->password === $request->repassword){
            $db = new User();
            $db->name = $request->name;
            $db->email = $request->user;
            $password = bcrypt($request->password);
            $db->password = $password;
            $db->save();
            Auth::attempt(['email' => $request->user, 'password' => $request->password]);
            return redirect()->route('index');
        }else{
            return redirect()->route('index');
        }
    }

    public function postforgetpass(Request $request){
        $user = user::where('email',$request->gmail)->get();
        $check = 0;
        foreach ($user as $item) {
            $check = $check + 1;
        }
        if($check == 0){
            return redirect()->route('index');
        }else{
            Mail::raw('Mật khẩu mới của bạn là 12345678', function ($message)  use($request) {
                $message->from('lephong123tb@gmail.com', 'Admin');
                $message->to($request->gmail, 'User');
                $message->subject('Mail quên mật khẩu');
            });
            $update = user::where('email',$request->gmail)->update([
                'password' => bcrypt('12345678')
            ]);
            return redirect()->route('index');
        }
    }
}
