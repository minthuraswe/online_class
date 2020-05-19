@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-danger" role="alert">
                {{session('message')}}
            </div>
            @endif
            <h2>Welcome to Online Class</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore iure, ex soluta suscipit totam dolores
                animi accusamus aspernatur. Quisquam officia alias animi veniam officiis totam quibusdam ipsa mollitia.
                Pariatur, sunt.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis rem ratione pariatur ipsum aut
                assumenda? Ea provident id accusamus, quos repellendus, veritatis perspiciatis alias voluptas incidunt
                velit illum, sunt cum.
            </p>
            <a href="course" class="btn btn-primary">See Courses</a>
        </div>
    </div>
</div>
@endsection