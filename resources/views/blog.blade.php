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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Последние новости</h2>
                    <a href="blog.html">Читать далее <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a href="#" class="services-item-image"><img src="{{ asset('storage/' . $post->cover_photo_path) }}" class="img-fluid" alt=""></a>
                        <div class="down-content">
                            <h4><a href="blogs/{{$post->slug}}">{{ $post->title }}</a></h4>
                            <p style="margin: 0;">{{ $post->sub_title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
