@php use Illuminate\Support\Facades\Auth; @endphp
@extends("layout.layout")

@section('content')
    <h1>Home</h1>

    @if(Auth::check() && Auth::user()->role === 'admin')
        <a href="{{ route('createProduct') }}">Добавить товар</a>
    @endif

    @foreach($products as $product)
        <p>{{ $product->title }}</p>
        <p>{{ $product->price }}</p>
        <p>{{ $product->year }}</p>
        <p>{{ $product->country }}</p>
        <p>{{ $product->features }}</p>
    @endforeach
@endsection
