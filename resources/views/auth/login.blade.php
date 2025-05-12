@extends('layouts.default')

@section('title', '登录')

@section('content')
    <section class="d-flex align-items-center justify-content-center"
             style="
             min-height: calc(100vh - 56px - 60px); /* 减去 header + footer 高度 */
             background:
               linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
               url('{{ asset('images/auth_login_01.jpg') }}') center/cover no-repeat;
         ">
        <div class="bg-white bg-opacity-75 p-5 rounded-4 shadow-lg"
             style="max-width: 420px; width: 100%;">
            {{-- 标题 --}}
            <h2 class="text-center mb-4 fw-bold">欢迎来到<br> {{ config('app.name', '在线商城') }}</h2>

            {{-- Nav Tabs --}}
            <ul class="nav nav-tabs mb-4 justify-content-center" id="authTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab"
                            data-bs-target="#login" type="button" role="tab"
                            aria-controls="login" aria-selected="true">
                        登录
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ route('register') }}">
                        注册
                    </a>
                </li>
            </ul>

            {{-- Tab 内容 --}}
            <div class="tab-content">
                <!-- 登录表单 -->
                <div class="tab-pane fade show active" id="login" role="tabpanel">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email_login" class="form-label">邮箱地址</label>
                            <input type="email" name="email" id="email_login"
                                   class="form-control rounded-pill @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_login" class="form-label">密码</label>
                            <input type="password" name="password" id="password_login"
                                   class="form-control rounded-pill @error('password') is-invalid @enderror"
                                   required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">记住我</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">登录</button>
                    </form>
{{--                    <p class="text-center mt-3">--}}
{{--                        <a href="{{ route('password.request') }}">忘记密码？</a>--}}
{{--                    </p>--}}
                </div>

                <!-- 注册表单 -->
                <div class="tab-pane fade" id="register" role="tabpanel">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">用户名</label>
                            <input type="text" name="name" id="name"
                                   class="form-control rounded-pill @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email_register" class="form-label">邮箱地址</label>
                            <input type="email" name="email" id="email_register"
                                   class="form-control rounded-pill @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_register" class="form-label">密码</label>
                            <input type="password" name="password" id="password_register"
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
                </div>
            </div>
        </div>
    </section>
@endsection

