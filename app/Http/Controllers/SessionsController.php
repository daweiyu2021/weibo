<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; // 增加验证类

class SessionsController extends Controller
{
    //
    public function create(){
        return view('sessions.create');
    }
    // 流程分析：
    // 使用Illuminate\Http\Request实力来接收用户的所有输入数据
    // 需要使用Request实例的单个值时，用以下方法：
    // $request->email(例子，取得request对象中的email内容)

    public function store(Request $request){
        $credentials=$this->validate($request,[
            'email' => 'required|email|max:255',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials,$request->has('remember'))){

            // 流程分析:
            // 使用email字段的值在数据库查找
            // 如果找到用户，将password字段中的值进行哈希加密，
            // 然后与数据库中的password中已加密的密码进行匹配；
            // 如果两个password的值完全一致，会创建一个会话给
            // 通过认证的用户，与此同时，会种下一个名为
            // laravel_session的HTTP Cookie,以此Cookie来记录
            // 用户的登录状态，并且返回值true;
            // 如果两个值不一致，返回false;
            // 未找到用户名，返回false;

            // 登录成功后的相关操作
            session()->flash('success','欢迎回来！');
            return redirect()->route('users.show',[Auth::user()]);
        } else {
            // 登录失败后的操作
            session()->flash('danger','很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
        return ;
    }
    public function destroy(){
        Auth::logout();
        session()->flash('success','您已成功退出!');
        return redirect('login');
    }
}
