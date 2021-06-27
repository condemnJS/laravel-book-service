<header>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/public">@ItLabrary</a>
            <div class="d-flex">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li>
                        <a href="{{ route('books.index') }}">Книги</a>
                    </li>
                    <li class="ml-3">
                        <a href="{{ route('logout') }}">Выйти</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('register') }}">Регистрация</a>
                    </li>
                    <li class="ml-3">
                        <a href="{{ route('login') }}">Авторизация</a>
                    </li>
                @endif
            </div>
        </div>
    </nav>
</header>