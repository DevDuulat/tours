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
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->title }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>{{ $tour->title }}</h2>
                <h6>${{ $tour->price }}</h6>
                <p>{{ $tour->description }}</p>
                <p>Region: {{ $tour->region->name }}</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright © 2024 develop by Sanabar: <a href="">saparga.kg</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection
