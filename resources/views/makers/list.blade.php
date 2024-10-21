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
                @foreach($makers as $entity)
                    <tr class="row">
                        <td id="{{$entity->id}}">{{$entity->id}}</td>
                        <td><a href="{{route("carModels")}}">{{$entity->name}}</a></td>
                        <td><img src="{{$entity->logo}}" alt=""></td>
                    </tr>
                @endforeach{{$makers->links()}}
            </tbody>
        </table>
    </div>
@endsection