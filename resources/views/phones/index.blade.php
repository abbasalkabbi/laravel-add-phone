@extends('layout')
@section('title','Phones')
@section('content')
    <h1>Phones </h1>
    <ul>
        @foreach ($phones as $item)
        <li>
            {{$item->name}}
        </li>
        @endforeach
    </ul>
@endsection