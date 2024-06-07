@extends('layouts.app')

@section('content')
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <section class="about-section" style="padding-top: 150px; padding-bottom: 150px;">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <img class="img-fluid rounded-3" src="https://freefrontend.dev/assets/square.png" alt="Image about Kyrgyzstan">
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <span class="text-muted">Наша История</span>
                        <h2 class="display-5 fw-bold">О Нас</h2>
                        <p class="lead">Добро пожаловать на наш сайт путешествий по Кыргызстану! Мы предлагаем уникальные маршруты и незабываемые впечатления. Кыргызстан — это страна великолепных гор, чистейших озер и богатого культурного наследия.</p>
                        <p class="lead mb-0">Присоединяйтесь к нам, чтобы открыть для себя красоту нашей страны. Мы стремимся сделать ваши путешествия комфортными и безопасными, предлагая лучшие условия и профессиональные услуги.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .about-section {
        background: #f8f9fa;
    }
    .about-section .text-muted {
        font-size: 1.2rem;
    }
    .about-section h2 {
        margin-top: 20px;
        font-size: 2.5rem;
        color: #333;
    }
    .about-section p.lead {
        font-size: 1.2rem;
        color: #555;
        margin-top: 20px;
    }
    .about-section img {
        max-width: 100%;
        border-radius: 8px;
    }
</style>
