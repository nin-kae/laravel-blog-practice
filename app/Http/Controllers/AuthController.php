<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // 显示登录表单
    public function showLogin()
    {
        return view('auth.login');
    }

    // 处理登录
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // 登录成功，重置 Session 防止固定会话攻击
            $request->session()->regenerate();
            // 重定向到首页或 intended URL
            return redirect()->intended('/');
        }

        // 登录失败，返回并带上错误提示
        return back()
            ->withErrors(['email' => '邮箱或密码不正确'])
            ->onlyInput('email');
    }

    // 显示注册表单
    public function showRegister(): Factory|View|Application
    {
        return view('auth.register');
    }

    // 处理注册
    public function register(Request $request): Factory|View|Application
    {
        // $validated 已验证的变量名
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','confirmed','min:8'],
        ]);

        // 创建用户
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // 登录
        Auth::login($user);

        return redirect('/');
    }

    // 处理退出登录
    public function logout(Request $request): Factory|View|Application
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
