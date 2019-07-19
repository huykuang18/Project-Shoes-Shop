<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class LoginController extends Controller
{
    protected $title = 'Đăng nhập';

    public function getLogin()
    {
      $this->data['title'] = $this->title;
      return view('login',$this->data);
    }

    public function logout()
    {
        session()->forget('user');
        session()->forget("cart");
        return redirect('/');
    }

    public function postLogin(Request $request)
    {
        $username=$request->username;
        $password=md5($request->password);
        $result=User::where('username',$username)->where('password',$password)->first();
        if ($result==null) {
            $alert='Sai tên đăng nhập hoặc mật khẩu!';
            return redirect()->back()->with('alert',$alert);
        }else{
            session(['user'=>$username]);
            return redirect('/');
        }
    }
}
