@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blogs</h1>


        <table class="table mt-5">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">User</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($blogs as $key => $blog)
                <tr>
                <th scope="row">{{$key+1}}</th>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->user_id}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td>
                        @if($blog->published == 0)
                            <a href="{{url('admin/blogs/approve/'.$blog->id)}}" class="btn btn-success">Approve</a>
                        @endif

                        <a href="{{url('admin/blogs/delete/'.$blog->id)}}"  class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection