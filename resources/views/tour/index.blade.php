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
    <div class="container" style="margin-top: 100px">
        <div class="row">
            @foreach($tours as $tour)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $tour->image) }}" class="card-img-top" alt="{{ $tour->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tour->title }}</h5>
                            <p class="card-text">Дата: {{ $tour->date_from }} - {{ $tour->date_to }}</p>
                            <p class="card-text">Цена: ${{ $tour->price }}</p>
                            <p class="card-text">{{ $tour->description }}</p>
                            <p class="card-text">Регион: {{ $tour->region->name }}</p>
                            <a href="{{ route('tour.details', ['id' => $tour->id]) }}" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
