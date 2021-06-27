@extends('layouts/base')

@section('title', 'Библиотека - Авторизация')

@section('section')
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="mt-3">Авторизация</h3>
            @include('components/alert')
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email" value="{{ old('email') }}">
                @error('email')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="exampleInputPassword1" placeholder="Пароль" name="password" value="{{ old('password') }}">
                @error('password')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Авторизироваться</button>
        </form>
    </div>
@endsection