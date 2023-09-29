@extends('layouts.app')

@section('content')
    <h1>Notas:</h1>
    <a href="{{ route('note.create') }}">Create new note</a>

    @if ($notes-> isEmpty())
        <p>No hay notas</p>
        @else
        <ul>
            @foreach ($notes as $note)
                <li>
                    <a href="{{route('note.show', $note->id)}}">{{$note->title}}</a> | 
                    <a href="{{ route('note.edit', $note->id) }}">Editar</a> | 

                    <form action="{{route('note.destroy', $note->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

@endsection