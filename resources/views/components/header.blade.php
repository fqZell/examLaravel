<header>
    <nav>
        <div class="logo">
            <img src="{{ asset("public/img/logo/logo.png") }}" alt="logo">
            <a href="{{ route("home") }}">logo</a>
        </div>

        <div class="nav">
            <a href="{{ route('home') }}">Главная</a>
            <a href="#">Продукты</a>
            <a href="#">Контакты</a>
        </div>

        <div class="auth">
            @guest
                <a href="{{ route('signIn') }}">Войти</a>
                <a href="{{ route('signUp') }}">Регистрация</a>
            @endguest

            @auth
                <a href="{{ route('auth.logOut') }}">Выход</a>
                <a href="#">Корзина</a>
            @endauth
        </div>
    </nav>
</header>
