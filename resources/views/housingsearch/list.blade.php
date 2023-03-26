@extends('layouts.master')
@section('title','List of Housings')

@section('content')


<div class="container">
    <h1 class="text-center mt-3 md-3">List of Housings</h1>
    <table class="table table-striped" id="housingsearch">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Address</th>
              <th scope="col">City</th>
              <th scope="col">State</th>
              <th scope="col">Zip</th>
              <th scope="col">Description</th>
              <th scope="col">Property_type</th>
              <th scope="col">Property_for</th>
              <th scope="col">Number_of_beds</th>
              <th scope="col">Number_of_bathrooms</th>
              <th scope="col">Price($)</th>
              <th scope="col">Utilities</th>
              <th scope="col">Area(in sqft)</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($housings as $h)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>

                    <td>{{$h->address}}</td>
                    <td>{{$h->city}}</td>
                    <td>{{$h->state}}</td>
                    <td>{{$h->zip}}</td>
                    <td>{{$h->description}}</td>
                    <td>{{$h->property_type}}</td>
                    <td>{{$h->property_for}}</td>
                    <td>{{$h->number_of_beds}}</td>
                    <td>{{$h->number_of_bathrooms}}</td>
                    <td>{{$h->price}}</td>
                    <td>{{$h->utilities}}</td>
                    <td>{{$h->area}}</td>




{{--                    <td class="d-flex">--}}
{{--                        <a class="me-2" href="/housings/{{$h->id}}"><button type="button" class="btn btn-primary">Edit</button></a>--}}
{{--                        <form action="/housings/{{$h->id}}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="submit" class="btn btn-danger" value="Delete">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
        </tbody>
      </table>
      <a href="/housingsearch/create"><button class="btn btn-success">Add a Housing</button></a>
</div>
@endsection
