@extends('layouts.default') {{-- 继承布局 --}}
@section('title', '关于我们 - 在线商城')

@section('content')
    <div class="container-fluid px-0">
        <section class="hero-section d-flex align-items-center justify-content-center text-center text-white bg-dark"
                 style="height: 500px;
                background:
                  /* 半透明叠层 + 商城氛围大图 */
                  linear-gradient(rgba(34, 49, 63, 0.8), rgba(34, 49, 63, 0.8)),
                  url('{{ asset('images/about_us_02.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <h1 class="display-3 fw-bold mb-3">关于 {{ config('app.name', 'Nin kae') }}</h1>
                <p class="lead mb-4">您的品质生活甄选平台，致力于为您提供优质的商品和卓越的服务。</p>
                <a href="/" class="btn btn-outline-light btn-lg rounded-pill">返回首页</a>
            </div>
        </section>

        <section id="our-story" class="py-5 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <img src="{{ asset('images/about_us_03.jpg') }}" alt="商城概览" class="img-fluid rounded shadow-lg">
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <h2 class="h3 mb-4 text-primary fw-semibold">我们的故事与承诺</h2>
                        <p class="lead text-secondary mb-4">
                            {{ config('app.name', 'Nin kae') }} 诞生于 2018 年，源于我们对美好生活的热爱和对品质商品的执着追求。
                        </p>
                        <p class="text-secondary">
                            我们深知每一件商品都承载着您对生活品质的期许。因此，我们精选全球优质好物，涵盖时尚服饰、家居生活、数码科技、美妆护肤等多个品类，力求满足您多样化的购物需求。
                            我们的承诺是为您提供正品保障、便捷的购物体验和贴心的售后服务，让您足不出户，轻松享受高品质生活。
                        </p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>精挑细选的优质商品</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>便捷流畅的购物体验</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>专业贴心的客户服务</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="h3 mb-5 text-center text-primary fw-semibold">我们的精选商品类别</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-lg overflow-hidden category-card">
                            <div class="card-body text-center p-5">
                                <i class="bi bi-衣架 fs-1 text-primary mb-3"></i>
                                <h5 class="card-title fw-bold text-secondary">时尚服饰</h5>
                                <p class="card-text text-muted">潮流服饰，穿出您的个性风采。</p>
                                <a href="/products?category=clothing" class="btn btn-outline-primary btn-sm rounded-pill mt-3">查看更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-lg overflow-hidden category-card">
                            <div class="card-body text-center p-5">
                                <i class="bi bi-手机 fs-1 text-success mb-3"></i>
                                <h5 class="card-title fw-bold text-secondary">数码科技</h5>
                                <p class="card-text text-muted">智能设备，引领科技新生活。</p>
                                <a href="/products?category=electronics" class="btn btn-outline-success btn-sm rounded-pill mt-3">查看更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-lg overflow-hidden category-card">
                            <div class="card-body text-center p-5">
                                <i class="bi bi-家居 fs-1 text-warning mb-3"></i>
                                <h5 class="card-title fw-bold text-secondary">家居生活</h5>
                                <p class="card-text text-muted">温馨好物，打造您的理想家。</p>
                                <a href="/products?category=home" class="btn btn-outline-warning btn-sm rounded-pill mt-3">查看更多</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <a href="/categories" class="btn btn-outline-secondary btn-lg rounded-pill">探索所有商品分类</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container">
                <h2 class="h3 mb-5 text-primary fw-semibold text-center">为什么选择 {{ config('app.name', 'Nin kae') }}？</h2>
                <div class="row gy-4 row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="d-flex align-items-start">
                            <div class="icon-box bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-shield-check fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary mb-2">正品保障，购物无忧</h5>
                                <p class="text-muted">我们承诺所有商品均为正品行货，严格把控商品质量，让您放心购物。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-start">
                            <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-truck fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary mb-2">快速配送，便捷到家</h5>
                                <p class="text-muted">我们拥有高效的物流体系，确保您的商品快速送达，享受便捷的购物体验。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-start">
                            <div class="icon-box bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-headset fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary mb-2">专业客服，贴心服务</h5>
                                <p class="text-muted">我们的客服团队随时为您解答疑问，提供专业的售前咨询和售后服务。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-start">
                            <div class="icon-box bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-arrow-return-left fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary mb-2">无忧退换，售后保障</h5>
                                <p class="text-muted">我们提供完善的退换货政策，让您购物更安心，售后无忧。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us" class="py-5 bg-light">
            <div class="container">
                <h2 class="h3 mb-5 text-primary fw-semibold text-center">联系我们</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-lg rounded-lg p-5">
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label fw-semibold text-secondary">姓名</label>
                                        <input type="text" class="form-control rounded-pill border-primary" id="name" placeholder="您的姓名">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label fw-semibold text-secondary">邮箱</label>
                                        <input type="email" class="form-control rounded-pill border-primary" id="email" placeholder="您的邮箱">
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label fw-semibold text-secondary">留言</label>
                                        <textarea class="form-control rounded-lg border-primary" id="message" rows="5" placeholder="您的需求或问题"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg rounded-pill">发送咨询</button>
                                    </div>
                                </div>
                            </form>
                            <div id="form-response" class="mt-3 text-center"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card border-0 shadow-sm rounded-lg p-4">
                            <h4 class="mb-3 text-secondary fw-semibold">联系方式</h4>
                            <address class="text-muted">
                                <p><i class="bi bi-geo-alt-fill text-primary me-2"></i> <strong>地址：</strong><br>东京都千代田区丸の内 1-1-1</p>
                                <p><i class="bi bi-telephone-fill text-success me-2"></i> <strong>电话：</strong><br>+81-3-1234-5678</p>
                                <p><i class="bi bi-envelope-fill text-warning me-2"></i> <strong>邮箱：</strong><br><a href="mailto:info@yourcompany.co.jp" class="text-decoration-none text-muted">info@yourcompany.co.jp</a></p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // 商品和分类卡片 hover 效果
            $('.product-card, .category-card').hover(
                function() {
                    $(this).addClass('shadow-lg').css('transform', 'translateY(-5px)');
                },
                function() {
                    $(this).removeClass('shadow-lg').css('transform', 'translateY(0)');
                }
            );

            // 表单提交模拟
            $('#contactForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '/api/contact', // 替换为你的实际 API 端点
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        $('#form-response').removeClass('alert-danger').addClass('alert alert-success').text('信息已成功发送！');
                        $('#contactForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        $('#form-response').removeClass('alert-success').addClass('alert alert-danger').text('发送失败，请稍后再试。');
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@stop
