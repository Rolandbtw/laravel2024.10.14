@extends('layouts.app')
@section('content')
    <div class="container"> 
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Gyártó</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($fuels as $fuel)
                    <tr class="row">
                        <td id="{{$fuel->id}}">{{$fuel->id}}</td>
                        <td>{{$fuel->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection