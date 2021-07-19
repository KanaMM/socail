@extends('templates.default')

@section('title', 'Регистрация')

@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto mt-5">
            <h3>Регистрация</h3>
            <form method="POST" action="{{ route('post.auth.signup') }}" novalidate>
                @csrf
                <div class="mb-3 mt-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email"  name="email" class="form-control" id="email" placeholder="например, kanat_aljan@mail.ru">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Логин</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="ваш ник">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="минимум 6 символов">
                </div>
                <button type="submit" class="btn btn-primary">Создать аккаунт</button>
            </form>
        </div>
    </div>
@endsection
