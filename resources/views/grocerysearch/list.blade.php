@extends('layouts.master')
@section('title','List of Grocery Stores')

@section('content')


<div class="container">
    <h1 class="text-center mt-3 md-3">List of Grocery Stores </h1>


    <table class="table table-striped" id="grocerysearch">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
              <th scope="col">City</th>
              <th scope="col">State</th>
              <th scope="col">Zip</th>
              <th scope="col">County</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($grocery_stores as $g)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$g->name}}</td>
                    <td>{{$g->address}}</td>
                    <td>{{$g->city}}</td>
                    <td>{{$g->state}}</td>
                    <td>{{$g->zip}}</td>
                    <td>{{$g->country}}</td>

{{--                    <td class="d-flex">--}}
{{--                        <a class="me-2" href="/grocery_stores/{{$g->id}}"><button type="button" class="btn btn-primary">Edit</button></a>--}}
{{--                        <form action="/grocery_stores/{{$g->id}}" method="POST">--}}
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
      <a href="/grocerysearch/create"><button class="btn btn-success">Add a Grocery Store</button></a>
</div>
@endsection
