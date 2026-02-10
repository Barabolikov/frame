@extends('layouts.app')

@section('title','Наш магазин')

@section('content')
    <div>
        <h2>Тут будуть товари</h2>

            @foreach($tovar as $tov)
                @foreach($tov as $t)
                    <div style="width: 30%; border: #0a0a0a 1px solid; float: left"> {{ $t }}</div>
                @endforeach
            @endforeach

    </div>
@endsection
