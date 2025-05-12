@extends('layouts.default')
@section('title', '登录成功')

@section('content')
    <section class="d-flex align-items-center justify-content-center text-center"
             style="min-height: calc(100vh - 56px - 60px);">
        <div class="container">
            <div class="alert alert-success shadow-lg" role="alert">
                <h4 class="alert-heading">登录成功！</h4>
                <p>欢迎回来，正在为您跳转到首页…</p>
            </div>
        </div>
    </section>

    {{-- 自动跳转脚本：2秒后前往首页 --}}
    @section('scripts')
        <script>
            setTimeout(function() {
                window.location.href = "{{ route('home') }}";
            }, 2000);
        </script>
    @endsection
@stop
