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
            <form action="{{ url('/shop/create') }}" method="POST">
                @csrf
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Введи назву" value="{{ old('name') }}">
                <textarea class="form-control" name="description" placeholder="Введи опис" > {{ old('description') }}</textarea>
                <input class="form-control" type="number" name="price" placeholder="10" value="{{ old('price') }}">
                <button class="btn btn-info">Зберегти</button>
            </form>
        </div>
    </div>
@endsection
