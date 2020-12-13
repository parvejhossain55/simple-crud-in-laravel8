@extends('layouts.app')

@section('title')
All Student List
@endsection

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h2>All Student Information</h2>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->roll }}</td>
                    <td>{{ $user->class }}</td>
                    <td>
                        <a href="{{ url('student/edit/'.$user->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('student/delete/'.$user->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
