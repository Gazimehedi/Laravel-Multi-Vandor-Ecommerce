@extends('layouts.app')

@section('content')
<ul class="bardump">
    <li>
        <a href="{{route('admin.users.index')}}">users</a>
    </li>
</ul>
<div class="top-title-box">
    <h2>Users</h2>
    <a href="{{route('admin.users.create')}}">Create</a>
</div>
<div class="container">
    <table class="list-item">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('admin.users.edit',$user->id)}}">Edit</a>
                        <form action="{{route('admin.users.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
