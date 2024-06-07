@extends('layouts.app')

@section('content')
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <header>
        @include('components.navbar')
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Откройте для себя Кыргызстан!</h4>
                    <h2>Путешествуйте по загадочным долинам и бескрайним горным вершинам</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Исследуйте красоту природы</h4>
                    <h2>Погрузитесь в великолепие озер, рек и живописных пейзажей</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Ощутите гостеприимство кыргызской культуры</h4>
                    <h2>Познайте уникальные обычаи, традиции и культурное наследие страны</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Популярные туры</h2>
                        <a href="packages.html">Посмотреть все <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($latestTours as $tour)
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="{{ route('tour.details', ['id' => $tour->id]) }}"><img src="{{ asset('storage/' .$tour->image) }}" alt=""></a>
                            <div class="down-content">
                                <a target="_blank" href="{{ route('tour.details', ['id' => $tour->id]) }}"><h4>{{ $tour->title }}</h4></a>
                                <h6>{{ $tour->price }}сом</h6>
                                <p>{{ \Illuminate\Support\Str::limit($tour->description, 200) }}</p>
                                <p>{{ $tour->region->name }}</p>
                                <small>
                                    <strong title="Available"><i class="fa fa-calendar"></i> {{ $tour->date_from }} - {{ $tour->date_to }}</strong>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Regions Section -->
    <div class="regions-section">
        <div class="container">
            <div class="section-heading">
                <h2>Регионы Кыргызстана</h2>
            </div>
            <div class="row">
                @foreach($regions as $region)
                    <div class="col-md-4">
                        <div class="region-item">
                            <h4><a href="{{ route('region.tours', ['region' => $region]) }}">{{ $region->name }}</a></h4>
                            <!-- You can add more details or images about the region if available -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>О нас</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <p>Приветствуем вас на нашем туристическом сайте! Мы занимаемся организацией незабываемых путешествий, позволяющих вам открыть для себя самые удивительные уголки мира. Мы предлагаем широкий выбор туров, включая экскурсии, культурные путешествия, активный отдых и многое другое.</p>
                        <ul class="featured-list">
                            <li><a href="#">Исследуйте потрясающие природные красоты</a></li>
                            <li><a href="#">Погрузитесь в захватывающую историю и культуру</a></li>
                            <li><a href="#">Настройтесь на приключения и новые впечатления</a></li>
                            <li><a href="#">Ощутите атмосферу гостеприимства в любой точке планеты</a></li>
                        </ul>
                        <a href="{{route('about_us')}}" class="filled-button">Узнать больше</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{URL::asset('/images/91824.jpg')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Последние новости</h2>
                        <a href="{{route('blog')}}">Читать далее <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($latestNews as $news)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <a href="#" class="services-item-image"><img src="{{ asset('storage/' . $news->cover_photo_path) }}" class="img-fluid" alt=""></a>
                            <div class="down-content">
                                <h4><a href="blogs/{{$news->slug}}">{{ $news->title }}</a></h4>
                                <p style="margin: 0;">{{ $news->sub_title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Отзывы</h2>
                        <a href="#">подробнее <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel text-center">
                        <div class="service-item">
                            <img style="width: 170px;text-align: center;margin-left: 90px;" src="https://images.unsplash.com/photo-1611695434398-4f4b330623e6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjN8fGZhY2V8ZW58MHx8MHx8fDA%3D3D" />
                            <div class="down-content">
                                <h4>Джейн Смит</h4>
                                <p class="n-m"><em>"Мое путешествие в Кыргызстан было просто невероятным! Очаровательные города, великолепная природа и отличный сервис сделали это путешествие незабываемым."</em></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <img style="width: 170px;text-align: center;margin-left: 90px;" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                            <div class="down-content">
                                <h4>Джейн Смит</h4>
                                <p class="n-m"><em>"Мое путешествие в Кыргызстан было просто невероятным! Очаровательные города, великолепная природа и отличный                                 сервис сделали это путешествие незабываемым."</em></p>
                            </div>
                        </div>
                        <div class="service-item">
                            <img style="width: 170px;text-align: center;margin-left: 90px;" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                            <div class="down-content">
                                <h4>Джейн Смит</h4>
                                <p class="n-m"><em>"Мое путешествие в Кыргызстан было просто невероятным! Очаровательные города, великолепная природа и отличный сервис сделали это путешествие незабываемым."</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Приглашаем вас в увлекательное путешествие!</h4>
                                <p>Откройте для себя новые уголки Кыргызстана вместе с нами. Насладитесь неповторимыми впечатлениями и отличным сервисом.</p>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="{{route('contacts')}}" class="filled-button">Связаться с нами</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
    .regions-section {
        background-color: #f8f9fa;
        padding: 60px 0;
    }

    .section-heading h2 {
        color: #333;
        font-size: 32px;
        margin-bottom: 30px;
    }

    .region-item {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .region-item h4 {
        color: #333;
        font-size: 24px;
        margin-bottom: 15px;
    }

</style>
@endsection

