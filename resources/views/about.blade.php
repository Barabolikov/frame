@extends('layouts.app')

@section('title','Про нас')

@section('content')
    <h1>{{ $name }}</h1>
    <div>
        <h2>Роробимо сторінк</h2>
        <p>{{ $description }}</p>
    </div>
@endsection
