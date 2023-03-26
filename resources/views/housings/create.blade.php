@extends('layouts.master')
@section('title','Add a Housing')
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
        <h1 class="text-center mt-3 md-3">Add a Housing</h1>
        <form action="/housings" method="POST">
            <form>
                @csrf

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                </div>

                <div class="mb-3">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}">
                </div>
                <div class="mb-3">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" value="{{ old('zip') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                </div>
                <div class="mb-3">
                    <label for="property_type" class="form-label">Property_type</label>
                    <input type="text" class="form-control" id="property_type" name="property_type" value="{{ old('property_type') }}">
                </div>
                <div class="mb-3">
                    <label for="property_for" class="form-label">Property_for</label>
                    <input type="text" class="form-control" id="property_for" name="property_for" value="{{ old('property_for') }}">
                </div>
                <div class="mb-3">
                    <label for="number_of_beds" class="form-label">Number_of_beds</label>
                    <input type="text" class="form-control" id="number_of_beds" name="number_of_beds" value="{{ old('number_of_beds') }}">
                </div>
                <div class="mb-3">
                    <label for="number_of_bathrooms" class="form-label">Number_of_bathrooms</label>
                    <input type="text" class="form-control" id="number_of_bathrooms" name="number_of_bathrooms" value="{{ old('number_of_bathrooms') }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price($)</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="utilities" class="form-label">Utilities</label>
                    <input type="text" class="form-control" id="utilities" name="utilities" value="{{ old('utilities') }}">
                </div>
                <div class="mb-3">
                    <label for="area" class="form-label">Area(in sqft)</label>
                    <input type="text" class="form-control" id="area" name="area" value="{{ old('area') }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
    </div>
@endsection
