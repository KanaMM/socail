@extends('templates.default')

@section('title')

@section('content')
    <div class="col-lg-6">
        <h3>Редактировать</h3>
        <form method="POST" action=" {{ route('postEdit') }}" novalidate>
            @csrf
            <div class="mb-3 mt-3">
                <label for="first_name" class="form-label">First name </label>
                <input type="text"  name="first_name" class="form-control" id="email"
                value="{{ Request::old('first_name') ?: Auth::user()->first_name }}">
            </div>
            <div>
                <label for="second_name" class="form-label">Second name</label>
                <input type="text" name="second_name" class="form-control" id="exampleInputPassword1"
                value="{{ Request::old('last_name') ?: Auth::user()->last_name }}">
            </div>
            <div>
                <label for="location" class="form-label">Location </label>
                <input type="text"  name="location" class="form-control" id="email"
                value="{{ Request::old('location') ?: Auth::user()->location }}">
            </div>
            <button type="submit" class="btn btn-primary">Обновить профиль</button>
        </form>
    </div>
@endsection
