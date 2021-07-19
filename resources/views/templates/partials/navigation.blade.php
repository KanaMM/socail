<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark mb-3">

        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><h1>Social</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             @if (Auth::check())
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Стена</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Друзья</a>
                </ul>
                    <form class="d-flex" method="get" action=" {{ route('getResults') }}">
                        <input  name="query" class="form-control me-2" type="search" placeholder="Что ищем?" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Найти</button>
                    </form>
            @endif
                <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                    <li class="nav-item">
                        <a href=" {{ route('getProfile', ['username' => Auth::user()->username]) }}" class="nav-link"> {{ Auth::user()->getNameorUsername() }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('getEdit') }}" class="nav-link">Обновить профиль</a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('auth.signout') }}" class="nav-link">Выйти</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('auth.signup') }}" class="nav-link">Зарегистрироваться</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route(('auth.signin')) }}" class="nav-link">Войти</a>
                    </li>
                @endif
                </ul>
            </div>
        </div>
</nav>


