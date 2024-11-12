@extends('layouts.app')
@section('content')
    <div class="container"> 
        <table class="table">
            <thead>
            </thead>
            <tbody>
                @foreach($fuels as $fuel)
                    <tr class="row">
                        <td id="{{$fuel->id}}">{{$fuel->id}}</td>
                        <td>{{$fuel->name}}</td>
                        <td><a href="{{ route('fuels.edit', $fuel->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a></td>
                        <td>

                            <form action="{{ route('fuels.destroy', $fuel->id) }}" method="POST">
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