@extends('layouts.template')
@section('content')
<div class="mt-4 mb-4 d-sm-flex align-items-center justify-content-between ">
    <h1 class="mb-0 text-gray-800 h3 sm-2">Data User</h1>
</div>
<table class="table table-bordered table-striped">
    <thead class="table bg-primary">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
