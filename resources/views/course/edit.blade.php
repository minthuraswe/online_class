@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="d-flex">
                    <div><h2>Edit Course</h2></div>
                </div>
                <form action="/course/{{$course->id}}" method="POST" class="mt-3 mb-3">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input type="text" class="form-control" id="" name="name" value="{{$course->name}}" required>
                        {{-- @if($errors->has('name'))
                        <span class="text-danger">
                            {{$errors->first('name')}}
                        </span>
                        @endif --}}
                    </div>
                    <div class="form-group">
                        <label for="">Course Duration</label>
                        <input type="number" class="form-control" id="" name="duration"
                        placeholder="Describe number only for week" value="{{$course->duration}}" required>
                        @if($errors->has('duration'))
                        <span class="text-danger">
                            {{$errors->first('duration')}}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Course Category</label>
                        <select class="custom-select" name="category">
                            <option >Choose Category</option>
                            @foreach ($cat as $item)
                                @if($item->id == $course->cat_id)
                                <option value="{{$item->id}}" selected="selected">{{$item->cat_name}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/course" class="btn btn-danger">Cancel</a>
                  </form>
            </div>
        </div>
    </div>
@endsection