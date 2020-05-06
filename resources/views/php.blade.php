@extends('layout')
@section('content')
    <h2>PHP Lessons</h2>
    @foreach ($data as $item)
        <li>Id - {{$item->id}}</li>
        <li>Name - {{$item->name}}</li>
        <li>Type - <span class="type">{{$item->type}}</span></li>
        <li>Duration - {{$item->duration}}</li><hr>
    @endforeach
@endsection