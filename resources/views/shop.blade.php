@extends('layouts.app')

@section('title','Наш магазин')

@section('content')

    <h2>Магазин</h2>
    <div class="filter" >
        <a href="/shop/add" class="add">Додати товар</a>
    </div>
    <div class="row">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <counter-widget></counter-widget>
        @foreach($products as $product)
            <div class="col-4 cart">
                <div>
                    <h5>{{ $product->name }}</h5>
                    @if($product->image)
                        <img src="{{ asset('storage/'. $product->image) }}" style="height: 200px; width: 200px;" alt="{{ $product->name }}">
                    @else
                    @endif
                    <p class="desc">{{ $product->description }}</p>
                    <div>{{ $product->price }} грн.</div>
                    <product-widget
                        :product-id="{{ $product->id }}"
                        :initial-stock="1"
                        :price-tovar="{{ $product->price }}">
                    </product-widget>
                    <div class="but">
                        <a href={{ url('shop/product/' . $product->id) }} class="btn btn-info">Детальніще</a>
                        <a class="btn btn-primary">Купити</a>
                    </div>
                    <productinfo-widget :item='@json($product)'></productinfo-widget>
                </div>
            </div>
        @endforeach
    </div>

@endsection
