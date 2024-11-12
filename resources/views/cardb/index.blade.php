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
            <select name="makers" id="makers">
                @foreach($makers as $maker)
                <option value="{{$maker->id}}">{{$maker->name}}</option>
                @endforeach
            </select>
            <label for="models">Modell</label>
            <select name="models" id="models">
                @foreach($models as $model)
                <option value="{{$model->id}}">{{$model->name}}</option>
                @endforeach
            </select>

            <label for="fuels">Üzemanyag</label>
            <select name="fuels">
                @foreach($fuels as $fuel)
                <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                @endforeach
            </select>
            <label for="shifters">Váltó típus</label>
            <select name="shifters">
                @foreach($shifters as $shifter)
                <option value="{{$shifter->id}}">{{$shifter->name}}</option>
                @endforeach
            </select>
            <label for="bodies">Karosszéria típus</label>
            <select name="bodies">
                @foreach($bodies as $body)
                <option value="{{$body->id}}">{{$body->name}}</option>
                @endforeach
            </select>
            <label for="colors">Szín</label>
            <select name="colors">
                @foreach($colors as $color)
                <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
            </select>
            <button type="submit">Ment</button>
        </form>

<!--         <div>
            <h1>Meglévő autók</h1>
            @foreach($cars as $car)
                <tr class="row">
                    <td id="{{$car->id}}">{{$car->id}}</td>
                    <td>{{$car->name}}</td>
                    
                </tr>
            @endforeach


        </div> -->
    </div>
@endsection