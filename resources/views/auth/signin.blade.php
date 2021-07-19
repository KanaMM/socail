@extends('templates.default')

@section('title', 'Вход')

@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto mt-5">
            <h3>Войти на сайт</h3>
            <form method="POST" action="{{ route('post.auth.signin') }}" novalidate>
                @csrf
                <div class="mb-3 mt-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email"  name="email" class="form-control" id="email" placeholder="например, kanat_aljan@mail.ru">
                </div>
                <div>
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="минимум 6 символов">
                </div>
                <div class="form-check mb-2">
                    <input name="remember" class="form-check-input" type="checkbox" value="" id="remember">
                    <label class="form-check-label" for="remember">
                        Запомнить меня
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
@endsection
