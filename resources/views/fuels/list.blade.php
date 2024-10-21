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
                @foreach($entities as $entity)
                    <tr class="row">
                        <td id="{{$entity->id}}">{{$entity->id}}</td>
                        <td>{{$entity->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection