@extends('layouts.app')

@section('title','Наш магазин')

@section('content')
    <div class="col-8" >
        <h2>Тут будуть товари</h2>
        <div class="row">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @foreach($products as $product)
                <div class="kol-4 cart">
                    <div>
                        <div>
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->description }}</p>
                            <div>{{ $product->price }} грн.</div>
                            <button class="btn btn-primary">Купити</button>
                        </div>
                    </div>
            @endforeach

    </div>
@endsection
