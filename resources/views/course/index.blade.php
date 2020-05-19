@extends('layouts.app')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if(auth()->user()->isAdmin == 1)
            <div class="d-flex">
                <div>
                    <h2>All Courses</h2>
                </div>
                <div class="ml-auto">
                    <a href="/course/create" class="btn btn-success">Add New Course</a>
                </div>
            </div>
            <table class="table mt-3 mb-3">
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
                        <td>
                            <?php $cat = App\Category::find($item->cat_id); ?>
                            {{$cat->cat_name}}
                        </td>
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
            @else
            @if(session('message'))
            <div class="alert alert-danger" role="alert">
                {{session('message')}}
            </div>
            @endif
            <div class="d-flex">
                <div>
                    <h2>All Courses</h2>
                </div>
                <div class="ml-auto">
                    <a href="/home" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <table class="table mt-3 mb-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Date/ Time</th>
                        <th scope="col">Course Outline</th>
                        <th scope="col">Register</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->duration}} weeks</td>
                        <td>{{$item->updated_at->diffforHumans()}}</td>
                        <td><a href="#" class="btn btn-success btn-sm">အသေးစိတ်ကြည့်ရန်</a></td>
                        <td><a href="#" class="btn btn-success btn-sm">စာရင်းသွင်းရန်</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif

        </div>
    </div>
</div>
@endsection