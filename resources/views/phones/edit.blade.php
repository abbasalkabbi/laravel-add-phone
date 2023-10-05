@extends('layout')
@section('title','create')
@section('content') 
<style>
    form{
        margin:auto;
        width:400px;
        padding:10px;
    }
    @media only screen and (max-width: 600px) {
        form{
        margin:auto;
        width:90%;
        padding:5px;
    }
    }
</style>
<h2 class="text-center">Edit Phone</h2>
    <form class="card " action="{{route('phones.update',['phone'=>$phone->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name-phone" class="form-label">Name  Phone</label>
            <input type="text" class="form-control" id="name-phone" name="name-phone" value="{{$phone->name}}">
            @error('name-phone')
                <div class="form-text text-danger ">Name Error</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name-phone" class="form-label">orgine</label>
            <input type="text" class="form-control" id="name-phone" name="name-phone" value="{{$phone->orgine}}" >
            @error('orgine-phone')
                <div class="form-text text-danger ">orgine Error</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price-phone" class="form-label">Price  Phone</label>
            <input type="text" class="form-control" id="price-phone" name="price-phone" value="{{$phone->price}}">
            @error('price-phone')
            <div class="form-text text-danger ">Price Error</div>
            @enderror
        </div>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route('phones.index')}}" type="button" class="btn btn-danger">canel</a>
        </div>
    </form>
@endsection
