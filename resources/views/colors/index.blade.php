@extends('layouts.app')
@section('content')
    <div class="container"> 
        <table class="table">
            <thead>
            </thead>
            <tbody>
                @foreach($colors as $color)
                    <tr class="row">
                        <td id="{{$color->id}}">{{$color->id}}</td>
                        <td>{{$color->name}}</td>
                        <td><a href="{{ route('colors.edit', $color->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a></td>
                        <td>

                            <form action="{{ route('colors.destroy', $color->id) }}" method="POST">
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