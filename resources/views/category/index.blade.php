@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="d-flex">
                    <div><h2>Add New Category</h2></div>
                </div>

                <form action="/category" class="mt-3 mb-3" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" id="" name="cat_name" value="{{old('cat_name')}}">
                        @if($errors->has('cat_name'))
                        <span class="text-danger">
                            {{$errors->first('cat_name')}}
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/home" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 mt-2">
                <h4>Category List</h4>
                <ul class="pl-4">
                    @foreach ($cat as $item)
                        <li>
                            <a href="/category/{{$item->id}}" class="text-dark pl-0">{{$item->cat_name}}</a>
                        </li>
                    @endforeach
                </ul>
                {{-- <div class="mt-4 pl-4  mr-0 row  ">
                    {{$data ?? ''->links()}}
                </div> --}}
            </div>
                
        </div>
    </div>
@endsection