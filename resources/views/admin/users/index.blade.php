@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_user'))

<div class="alert alert-danger">{{session('deleted_user')}}</div>

@endif 

<h1>Users</h1>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
        @if($users)

            @foreach($users as $user)
           
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" width="60" src="{{$user->photo ? $user->photo->file : 'https://via.placeholder.com/150'}}" alt="" ></td>
                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif    
    </tbody>
</table>

@stop