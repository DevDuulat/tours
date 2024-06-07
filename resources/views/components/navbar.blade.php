<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/"><h2>Saparga</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{route('tours.index')}}">Туры</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Блог</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('about_us')}}">О нас</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('contacts')}}">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>
