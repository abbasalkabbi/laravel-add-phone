@extends('layout')
@section('title','home')
@section('content')
    <h1>Home </h1>
    <ul>
        @foreach ($phones as $item)
        <li>
            {{$item->name}}
        </li>
        @endforeach
    </ul>
@endsection