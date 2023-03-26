@extends('layouts.admin')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <div class="container bg-white p-5 m-2 rounded text-xl text-blue-500">
            Update Data
        </div>
        <div class="container flex justify-center mt-10 bg-white p-10">
            <div class="container shadow-md text-left w-80 p-2">
                <form action="{{ $data['basePath'] }}/{{ $data['id'] }}" method="post">
                    @csrf
                    @method('PATCH')
                    @foreach ($data['fields'] as $key => $value)
                        <div class="form-group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for={{ $key }}>
                                {{ $key }}
                                :</label>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                type="text" class="form-control" name={{ $key }} id={{ $key }}
                                value="{{ $value }}" placeholder="Enter here...">
                            <span style="color: red">

                            </span>
                        </div>
                    @endforeach
                    <div class="flex justify-around">
                        <a href="{{ $data['basePath'] }}" id="btn_back"
                            class="bg-blue-600 p-2 rounded shadow-md hover:bg-blue-800 text-white m-2">Back</a>
                        <button type="submit" name="update"
                            class="bg-green-600 p-2 rounded shadow-md hover:bg-green-800 text-white m-2" id="btn-submit">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
