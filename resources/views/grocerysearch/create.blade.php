@extends('layouts.master')
@section('title','Add a Grocery Store')
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
        <h1 class="text-center mt-3 md-3">Add a Store</h1>
        <form action="/grocerysearch" method="POST">
            <form>
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">city</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">state</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}">
                </div>
                <div class="mb-3">
                    <label for="zip" class="form-label">zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" value="{{ old('zip') }}">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">country</label>
                    <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
    </div>
@endsection
