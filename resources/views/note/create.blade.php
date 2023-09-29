@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index') }}">Cancel</a>

    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <label for="">Title task</label>
        <input type="text" placeholder="Title..." name="title">
        <label for="">Description task</label>
        <input type="text" placeholder="Description" name="description">
        <input type="submit" value="Create">
    </form>
@endsection