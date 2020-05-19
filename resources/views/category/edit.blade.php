@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="d-flex">
                    <div><h2>Add New Category</h2></div>
                </div>

                <form action="/category/{{$category->id}}" class="mt-3 mb-3" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" id="" name="cat_name" value="{{$category->cat_name}}">
                        @if($errors->has('cat_name'))
                        <span class="text-danger">
                            {{$errors->first('cat_name')}}
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/category" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection