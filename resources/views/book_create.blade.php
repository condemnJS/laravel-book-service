@extends('layouts/base')

@section('title', 'Библиотека - Добавить книгу')

@section('section')
    <div class="container">
        @include('components/alert')
        <form method="POST" action="{{ route('books.create') }}" enctype="multipart/form-data">
            @csrf
            <h3 class="mt-3">Добавить книгу</h3>
            @include('components/alert')
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       placeholder="Название книги" value="{{ old('title') }}">
                @error('title')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Издатель</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror"
                       placeholder="Название издательства" name="publisher" value="{{ old('publisher') }}">
                @error('publisher')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Год издания</label>
                <input type="text" class="form-control @error('year_publishing') is-invalid @enderror"
                       name="year_publishing" value="{{ old('year_publishing') }}">
                @error('year_publishing')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Цена</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror"
                       name="price" value="{{ old('price') }}">
                @error('price')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Фото</label>
                <input type="file" class="form-control-file @error('photo') is-invalid @enderror"
                       name="photo" value="{{ old('photo') }}">
                @error('photo')
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Добавить книгу</button>
        </form>
    </div>
@endsection