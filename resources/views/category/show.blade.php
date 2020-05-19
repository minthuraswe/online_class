@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="d-flex">
                    <div><h2>Category Details</h2></div>
                    <div class="ml-auto"><a href="/category" class="btn btn-secondary">Back</a></div>
                </div>
               
                <table class="table mt-3 mb-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date/ Time</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$category->id}}</th>
                            <td>{{$category->cat_name}}</td>
                            <td>{{$category->updated_at->diffforHumans()}}</td>
                            <td>
                                <a href="/category/{{$category->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                                <form action="/category/{{$category->id}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection