@extends('templates.default')

@section('title')

@section('content')
    <h1>Результаты: "{{ Request::input('query') }}"</h1>

    @if(count($users)==0)
        <p>Не найден!</p>
    @else
        <div class="row">
            <div class="col-lg-6">
                @foreach($users as $user)
                    @include('user.partials.userblock')
                @endforeach
            </div>
        </div>
    @endif

@endsection
