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
                    <a href="#">{{$note->title}}</a> | <a href="{{ route('note.edit', $note->id) }}">Editar</a> | <a href="">Eliminar</a>
                </li>
            @endforeach
        </ul>
    @endif

@endsection