@extends('layouts.default')

@section('content')
<section class="hero py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">最新时尚潮流</h1>
        <p class="lead">发现我们精选的高品质商品，提升您的生活品味。</p>
        <a href="/products" class="btn btn-primary btn-lg rounded-pill">查看所有商品</a>
    </div>
</section>

<section class="category-section py-5 bg-light">
    <div class="container">
        <h2 class="h3 text-center mb-4">热门商品分类</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card category-card h-100 text-center p-4">
                    <i class="bi bi-衣架 category-icon"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">服装</h5>
                        <p class="card-text text-muted">时尚男女服装，引领潮流。</p>
                        <a href="/categories/clothing" class="btn btn-outline-secondary btn-sm rounded-pill">查看更多</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card category-card h-100 text-center p-4">
                    <i class="bi bi-手机 category-icon"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">电子产品</h5>
                        <p class="card-text text-muted">最新科技产品，智能生活之选。</p>
                        <a href="/categories/electronics" class="btn btn-outline-secondary btn-sm rounded-pill">查看更多</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card category-card h-100 text-center p-4">
                    <i class="bi bi-家居 category-icon"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">家居用品</h5>
                        <p class="card-text text-muted">打造舒适温馨的家居环境。</p>
                        <a href="/categories/home" class="btn btn-outline-secondary btn-sm rounded-pill">查看更多</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-section py-5">
    <div class="container">
        <h2 class="h3 text-center mb-4">精选热销商品</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card product-card h-100">
                    <img src="/images/product1.jpg" class="card-img-top product-image" alt="商品一">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">优质衬衫</h5>
                        <p class="card-text text-muted">舒适透气，商务休闲皆宜。</p>
                        <p class="card-text fw-bold text-primary">$49.99</p>
                        <button class="btn btn-primary btn-sm rounded-pill"><i class="bi bi-cart-plus-fill"></i> 加入购物车</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card h-100">
                    <img src="/images/product2.jpg" class="card-img-top product-image" alt="商品二">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">智能手表</h5>
                        <p class="card-text text-muted">健康监测，智能提醒。</p>
                        <p class="card-text fw-bold text-primary">$129.99</p>
                        <button class="btn btn-primary btn-sm rounded-pill"><i class="bi bi-cart-plus-fill"></i> 加入购物车</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card h-100">
                    <img src="/images/product3.jpg" class="card-img-top product-image" alt="商品三">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">简约茶几</h5>
                        <p class="card-text text-muted">现代设计，提升客厅格调。</p>
                        <p class="card-text fw-bold text-primary">$79.99</p>
                        <button class="btn btn-primary btn-sm rounded-pill"><i class="bi bi-cart-plus-fill"></i> 加入购物车</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card h-100">
                    <img src="/images/product4.jpg" class="card-img-top product-image" alt="商品四">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">真皮钱包</h5>
                        <p class="card-text text-muted">精选材质，经典耐用。</p>
                        <p class="card-text fw-bold text-primary">$39.99</p>
                        <button class="btn btn-primary btn-sm rounded-pill"><i class="bi bi-cart-plus-fill"></i> 加入购物车</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/products" class="btn btn-outline-primary btn-lg rounded-pill">查看更多商品</a>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        // 可以添加一些 jQuery 交互效果，例如轮播图、商品 hover 效果等

        // 商品卡片 hover 效果 (已通过 CSS 实现，这里仅作示例)
        $('.product-card').hover(function() {
            $(this).addClass('shadow-lg').css('transform', 'translateY(-5px)');
        }, function() {
            $(this).removeClass('shadow-lg').css('transform', 'translateY(0)');
        });

        // 分类卡片 hover 效果 (已通过 CSS 实现，这里仅作示例)
        $('.category-card').hover(function() {
            $(this).addClass('shadow-sm').css('transform', 'translateY(-3px)');
        }, function() {
            $(this).removeClass('shadow-sm').css('transform', 'translateY(0)');
        });
    });
</script>
@stop
