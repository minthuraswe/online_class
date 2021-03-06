@extends('layout')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="d-flex">
                    <div><h2>Add New Course</h2></div>
                </div>
                <form action="/course" method="POST" class="mt-3 mb-3">
                    @csrf
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input type="text" class="form-control" id="" name="name" value="{{old('name')}}">
                        @if($errors->has('name'))
                        <span class="text-danger">
                            {{$errors->first('name')}}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Course Duration</label>
                        <input type="number" class="form-control" id="" name="duration"
                        placeholder="Describe number only for week" value="{{old('duration')}}">
                        @if($errors->has('duration'))
                        <span class="text-danger">
                          {{$errors->first('duration')}}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Course Category</label>
                        <input type="text" class="form-control" id="" name="category" value="{{old('category')}}">
                        @if($errors->has('category'))
                        <span class="text-danger">
                            {{$errors->first('category')}}
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="/course" class="btn btn-danger">Cancel</a>
                  </form>
            </div>
        </div>
    </div>
@endsection