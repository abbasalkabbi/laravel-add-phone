@extends('layout')
@section('title','create')
@section('content') 
<style>
    form{
        margin:auto;
        width:400px;
        padding:10px;
    }
</style>
<h2 class="text-center">Add New Phone</h2>
    <form class="card "  method="POST">
        @csrf
        <div class="mb-3">
            <label for="name-phone" class="form-label">Name Of Phone</label>
            <input type="text" class="form-control" id="name-phone" >
            <div class="form-text text-danger ">Name Error</div>
        </div>
        <div class="mb-3">
            <label for="price-phone" class="form-label">Price Of Phone</label>
            <input type="text" class="form-control" id="price-phone" name="price-phone">
            <div class="form-text text-danger ">Price Error</div>
        </div>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger">canel</button>
        </div>
    </form>
@endsection
