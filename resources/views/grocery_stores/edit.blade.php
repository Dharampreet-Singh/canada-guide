@extends('layouts.master')
@section('title','Edit a Grocery Store')
@section('content')

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show d-flex align-items-center justify-content-between" role="alert">
    <div>
        @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
        @endforeach
    </div>
    <button type="button" class="btn-close position-static" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="container">
        <h1 class="text-center mt-3 md-3">Edit a Grocery Store</h1>
        <form action="/grocery_stores/{{$grocery->id}}" method="post">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$grocery->name}}">
                </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$grocery->address}}">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{$grocery->city}}">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state" value="{{$grocery->state}}">
            </div>
            <div class="mb-3">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" value="{{$grocery->zip}}">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{$grocery->country}}">
            </div>

                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
