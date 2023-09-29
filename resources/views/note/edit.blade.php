@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Cancelar</a>
@if ($errors->any())
<ul>
     @foreach ($errors->all() as $error)
         <li style="color: red"> {{$error}} </li>
     @endforeach
</ul>
@endif
<form method="POST" action="{{ route('note.update', $note->id) }}">
    @method('PUT')
    @csrf
    <label for="">Title task</label>
    <input type="text" placeholder="Title..." name="title" value="{{$note->title}}">
    <label for="">Description task</label>
    <input type="text" placeholder="Description" name="description" value="{{$note->description}}">
    <input type="submit" value="Update">
</form>
@endsection