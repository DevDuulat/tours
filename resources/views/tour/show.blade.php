@extends('layouts.app')

@section('content')
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

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
                <img src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->title }}" class="img-fluid tour-main-image">
            </div>
            <div class="col-md-6">
                <h2>{{ $tour->title }}</h2>
                <h6>${{ $tour->price }}</h6>
                <p>{{ $tour->description }}</p>
                <p>Region: {{ $tour->region->name }}</p>
            </div>
        </div>
    </div>
    <div class="container tour-programs" style="margin-top: 50px">
        @foreach($tour->programs as $program)
            <div class="tour-program">
                <h3>День {{ $program->day }}</h3>
                <p>{{ $program->description }}</p>
                @if($program->image)
                    <img src="{{ asset('storage/' . $program->image) }}" alt="Image for day {{ $program->day }}" class="img-fluid tour-program-image">
                @endif
            </div>
            <hr>
        @endforeach
    </div>

    <style>
        .tour-details-section {
            background: #f8f9fa;
        }
        .tour-program {
            margin-bottom: 20px;
        }
        .tour-program img {
            max-width: 100%;
            max-height: 400px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .tour-main-image {
            max-width: 100%;
            max-height: 500px;
            border-radius: 8px;
        }
        .tour-programs {
            margin-top: 50px;
        }
        .tour-program img {
            max-width: 100%;
            max-height: 300px;
            border-radius: 8px;
            margin-top: 10px;
        }
    </style>
@endsection
