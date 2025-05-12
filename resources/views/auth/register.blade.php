@extends('layouts.default')
@section('title', '注册')

@section('content')
    <section class="d-flex align-items-center justify-content-center"
             style="
             min-height: calc(100vh - 56px - 60px);
             background:
               linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
               url('{{ asset('images/auth_login_01.jpg') }}') center/cover no-repeat;
         ">
        <div class="bg-white bg-opacity-75 p-5 rounded-4 shadow-lg"
             style="max-width: 420px; width: 100%;">
            <h2 class="text-center mb-4 fw-bold">创建新账号</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">用户名</label>
                    <input type="text" name="name" id="name"
                           class="form-control rounded-pill @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required autofocus>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">邮箱地址</label>
                    <input type="email" name="email" id="email"
                           class="form-control rounded-pill @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">密码</label>
                    <input type="password" name="password" id="password"
                           class="form-control rounded-pill @error('password') is-invalid @enderror"
                           required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">确认密码</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="form-control rounded-pill" required>
                </div>
                <button type="submit" class="btn btn-success w-100 rounded-pill">注册</button>
            </form>
            <p class="text-center mt-3">
                已有账号？<a href="{{ route('login') }}">立即登录</a>
            </p>
        </div>
    </section>
@endsection
