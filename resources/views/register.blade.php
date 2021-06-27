@extends('layouts/base')

@section('title', 'Библиотека - Регистрация')

@section('section')
    <div class="container">
        <form method="POST">
            @csrf
            <h3 class="mt-3">Регистрация</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">ФИО</label>
                <input type="text" name="fio" class="form-control @error('fio') is-invalid @enderror"
                       id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ФИО" value="{{ old('fio') }}">
                @error('fio')
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
            <div class="form-group">
                <label for="exampleInputPassword1">Подвердите пароль</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                       id="exampleInputPassword1" name="password_confirmation" value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Зарегистрироваться</button>
        </form>
    </div>
@endsection