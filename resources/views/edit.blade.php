@extends('layouts.app')

@section('title','Наш магазин')

@section('content')
    <div class="col-8" >
        <h2>Редагування товару </h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif
        <div >
            <form action="{{ url('shop/product/' . $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label>Категорія</label>
                <select name="category_id" class="form-control">
                    <option value="{{ $product->category_id }}">{{ $categories[$product->category_id]->name }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label for="name">Назва товарy</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"  value="{{ $product->name }}">
                <label for="name">Опис товарy</label>
                <textarea class="form-control" name="description"  > {{ $product->description }}</textarea>
                <label for="name">Ціна товарy</label>
                <input class="form-control" type="number" name="price"  value="{{ $product->price }}">


                    <button class="btn btn-info">Оновити</button>


            </form>
        </div>
    </div>
@endsection
