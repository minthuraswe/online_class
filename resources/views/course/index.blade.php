@extends('layout')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="d-flex">
                    <div><h2>All Courses</h2></div>
                    <div class="ml-auto">
                        <a href="/course/create" class="btn btn-success">Add New Course</a>
                    </div>
                </div>
              
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Category</th>
                        <th scope="col">Date/ Time</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->duration}} weeks</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->updated_at->diffforHumans()}}</td>
                            <td>
                                <a href="/course/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                                <form action="/course/{{$item->id}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection