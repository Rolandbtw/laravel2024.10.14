@extends('layouts.app')
@section('content')
    <div class="container"> 
        <table class="table">
            <thead>
            </thead>
            <tbody>
                @foreach($makers as $maker)
                    <tr class="row">
                        <td id="{{$maker->id}}">{{$maker->id}}</td>
                        <td>{{$maker->name}}</td>
                        <td><img src="{{$maker->logo}}" alt=""></td>
                        <td><a href="{{ route('makers.edit', $maker->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a></td>
                        <td>

                            <form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Biztos töröljük?')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>

        {{$makers->links()}}
        
    </div>
@endsection