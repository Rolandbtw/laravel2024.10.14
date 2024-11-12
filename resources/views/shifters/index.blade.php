@extends('layouts.app')
@section('content')
    <div class="container"> 
        <table class="table">
            <thead>
            </thead>
            <tbody>
                @foreach($shifters as $shifter)
                    <tr class="row">
                        <td id="{{$shifter->id}}">{{$shifter->id}}</td>
                        <td>{{$shifter->name}}</td>
                        <td><a href="{{ route('shifters.edit', $shifter->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a></td>
                        <td>

                            <form action="{{ route('shifters.destroy', $shifter->id) }}" method="POST">
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