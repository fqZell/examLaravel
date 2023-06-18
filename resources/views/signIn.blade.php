@extends("layout.layout")

@section('content')
    <section class="forms">

        <h2>Вход</h2>

        <form action="{{ route('auth.signIn') }}" method="post">
            @csrf

            <label for="login">Логин:*</label>
            <input name="login" type="text" value="">

            <label for="password">Пароль:*</label>
            <input name="password" type="password" value="">

            <button type="submit">Вход</button>

            @include('components.error')

        </form>
    </section>
@endsection
