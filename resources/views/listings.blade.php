@extends('layout');

@section('content')
    <h1>Listing</h1>

    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach
    
@endsection
