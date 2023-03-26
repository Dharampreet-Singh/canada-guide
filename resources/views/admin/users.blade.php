@extends('layouts.admin')

@section('content')
    <div>
        <div class="container bg-white p-5 m-2 rounded text-xl text-blue-500">
            Manage Users
        </div>
        <div class="flex justify-end">
            <a href="/admin/users/create">
                <div
                    class="container p-2 bg-green-500 cursor-pointer
            text-white text-center w-48 mr-5 hover:bg-green-700 shadow-md rounded">
                    + Add New User
                </div>
            </a>
        </div>
        <div class="overflow-x-auto relative p-5">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usersList as $user)
                        <tr class="bg-white border-b">
                            <td class="py-4 px-6">
                                {{ $user->id }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $user->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $user->email }}
                            </td>
                            <td>
                                <div class="bg-amber-500 hover:bg-amber-700  p-1 text-white rounded text-center shadow-md">
                                    <form method="get" action="{{ url('/admin/users/' . $user->id . '/edit') }}">
                                        {{ csrf_field() }}
                                        <input type="submit" value="Update" />
                                    </form>
                                </div>
                            </td>
                            <td>
                                <div class="bg-orange-600 hover:bg-orange-700 p-1 text-white rounded text-center shadow-md">
                                    <form method="post" action="{{ url('/admin/users/', $user->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete" />
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
