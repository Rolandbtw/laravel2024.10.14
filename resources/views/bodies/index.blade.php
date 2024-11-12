@extends('layouts.app')
@section('content')
    <div class="container"> 
        <table class="table">
            <thead>
            </thead>
            <tbody>
                @foreach($bodies as $body)
                    <tr class="row">
                        <td id="{{$body->id}}">{{$body->id}}</td>
                        <td>{{$body->name}}</td>
                        <td><a href="{{ route('bodies.edit', $body->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a></td>
                        <td>

                            <form action="{{ route('bodies.destroy', $body->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Biztos töröljük?')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection