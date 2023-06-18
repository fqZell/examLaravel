@extends("layout.layout")

@section('content')
    <section class="forms">

        <h2>Добавление товара</h2>

        <form action="{{ route('product.createProduct') }}" method="post">
            @csrf

            <label for="title">Заголовок:*</label>
            <input name="title" type="text" value="{{ old('title') }}">

            <label for="price">Цена(в рублях):*</label>
            <input name="price" type="number" value="{{ old('price') }}">

            <label for="year">Год производства товара:*</label>
            <input name="year" type="number" value="{{ old('year') }}">

            <label for="country">Страна производитель товара:*</label>
            <input name="country" type="text" value="{{ old('country') }}">

            <label for="features">Характеристики товара:*</label>
            <input name="features" type="text" value="{{ old('features') }}">

            <button type="submit">Добавить товар</button>

            @include('components.error')

        </form>
    </section>
@endsection
