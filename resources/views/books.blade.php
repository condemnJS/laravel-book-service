@extends('layouts/base')

@section('title', 'Библиотека - Книги')

@section('section')
    <div class="container">
        <div class="d-flex justify-content-between mt-3">
            <h3>Книги</h3>
            @if(\Illuminate\Support\Facades\Auth::user()->role_id !== 1)
                <a class="btn btn-primary" href="{{ route('books.create') }}">Добавить книгу</a>
            @endif
        </div>
        <div class="list-books mt-3">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection