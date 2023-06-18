@extends("layout.layout")

@section('content')
    <section class="forms">

        <h2>Редактирование товара</h2>

        <form action="{{ route('product.update', $product) }}" method="post">
            @csrf

            <label for="title">Заголовок:*</label>
            <input name="title" type="text" value="{{ $product->title }}">

            <label for="price">Цена(в рублях):*</label>
            <input name="price" type="number" value="{{ $product->price }}">

            <label for="year">Год производства товара:*</label>
            <input name="year" type="number" value="{{ $product->year }}">

            <label for="country">Страна производитель товара:*</label>
            <input name="country" type="text" value="{{ $product->country }}">

            <label for="features">Характеристики товара:*</label>
            <input name="features" type="text" value="{{ $product->features }}">

            <button type="submit">Редактирование товар</button>

            @include('components.error')

        </form>
    </section>
@endsection
