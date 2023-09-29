@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index') }}">Cancel</a>

    @if ($errors->any())
       <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red"> {{$error}} </li>
            @endforeach
       </ul>
    @endif

    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <label for="">Title task</label>
        <input type="text" placeholder="Title..." name="title"> <br>
        {{-- @error('title')
            <p style="color: red"> {{$message}}</p>
        @enderror --}}
        <label for="">Description task</label>
        <input type="text" placeholder="Description" name="description"> <br>
        {{-- @error('description')
            <p style="color: red"> {{$message}}</p>
        @enderror --}}
        <input type="submit" value="Create">
    </form>
@endsection