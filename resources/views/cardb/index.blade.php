@extends('layouts.app')
@section('content')
    <div class="container"> 
        @error('name')
        <div class="alert alert-warning">{{ $message }}</div>
        @enderror

        <form action="{{ route('cardb.create') }}" method="PATCH">
            @csrf
            @method('PATCH')

            
            
            <label for="makers">Gyártó</label>
            <select name="makers">
                @foreach($makers as $maker)
                <option value="{{$maker->name}}">{{$maker->name}}</option>
                @endforeach
            </select>
            <label for="carmodels">Modell</label>
            <select name="carmodels">
                @foreach($carmodels as $model)
                <option value="{{$model->name}}">{{$model->name}}</option>
                @endforeach
            </select>

            <label for="fuels">Üzemanyag</label>
            <select name="fuels">
                @foreach($fuels as $fuel)
                <option value="{{$fuel->name}}">{{$fuel->name}}</option>
                @endforeach
            </select>
            <label for="shifters">Váltó típus</label>
            <select name="shifters">
                @foreach($shifters as $shifter)
                <option value="{{$shifter->name}}">{{$shifter->name}}</option>
                @endforeach
            </select>
            <label for="bodies">Karosszéria típus</label>
            <select name="bodies">
                @foreach($bodies as $body)
                <option value="{{$body->name}}">{{$body->name}}</option>
                @endforeach
            </select>
            <label for="colors">Szín</label>
            <select name="colors">
                @foreach($colors as $color)
                <option value="{{$color->name}}">{{$color->name}}</option>
                @endforeach
            </select>
            <button type="submit">Ment</button>
        </form>
                
    </div>
@endsection