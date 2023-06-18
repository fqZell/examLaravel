@extends("layout.layout")

@section('content')
    <section class="forms">

        <h2>Регистрация</h2>

        <form action="{{ route('auth.signUp') }}" method="post">
            @csrf

            <label for="name">Имя:*</label>
            <input name="name" type="text" value="{{ old('name') }}">

            <label for="lastname">Фамилия:*</label>
            <input name="lastname" type="text" value="{{ old('lastname') }}">

            <label for="patronymic">Отчество:</label>
            <input name="patronymic" type="text" value="{{ old('patronymic') }}">

            <label for="login">Логин:*</label>
            <input name="login" type="text" value="{{ old('login') }}">

            <label for="email">Почта:*</label>
            <input name="email" type="email" value="{{ old('email') }}">

            <label for="password">Пароль:*</label>
            <input name="password" type="password">

            <label for="re_password">Повторите пароль:*</label>
            <input name="re_password" type="password">

            <input name="rules" type="checkbox">
            <label for="rules">Я согласен с правилами регистрации на веб-сайте*</label>

            <button type="submit">Регистрация</button>

            @include('components.error')

        </form>
    </section>
@endsection
