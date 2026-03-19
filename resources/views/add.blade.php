@extends('layouts.app')

@section('title','Наш магазин')

@section('content')
    <div class="col-8" >
        <h2>ВВодимо товар </h2>
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
            <form action="{{ url('/shop/create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Категорія</label>
                <select name="category_id" class="form-control">
                    <option value="">-Оберіть категорію-</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label for="name">Назва товарy</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Введи назву" value="{{ old('name') }}">
                <label for="name">Опис товарy</label>
                <textarea class="form-control" name="description" placeholder="Введи опис" > {{ old('description') }}</textarea>
                <label for="name">Ціна товарy</label>
                <input class="form-control" type="number" name="price" placeholder="10" value="{{ old('price') }}">
                <label for="image">Зображення продукту</label>
                <input class="form-control" type="file" name="image">
                    <button class="btn btn-info">Зберегти</button>


            </form>
        </div>
    </div>
@endsection
