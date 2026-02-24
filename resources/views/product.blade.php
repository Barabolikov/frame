@extends('layouts.app')

@section('title','Наш магазин')

@section('content')

    <h2>Продукт</h2>
    <div class="filter">
        <a href="/shop/add" class="add">Додати товар</a>
    </div>

                <div>
                    <h2>{{ $product->name }}</h2>
                    <h3> Категорія -  {{ $categories[$product->category_id]->name }}</h3>

                    <p class="desc">{{ $product->description }}</p>
                    <div>{{ $product->price }} грн.</div>
                    <div class="but">
                        <a href="{{ url('shop/product/' . $product->id. '/edit') }}" class="btn btn-info">Редагувати</a>
                        <form action="{{ url('shop/product/' . $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning">Видалити</button>
                        </form>

                    </div>
                </div>


@endsection
