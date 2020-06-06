<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::all();
        return view('course.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->isAdmin == 1) {
            $cat = Category::all();
            return view('course.create', compact('cat'));
        } else {
            return redirect('course')->with('message', 'You are not allowed to this page');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $this->validateData($request);

        $course = Course::create([
            'name' => request()->name,
            'duration' => request()->duration,
            'cat_id' => request()->category,
        ]);

        return redirect('course');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $cat = Category::all();
        return view('course.edit', compact('course', 'cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course, Request $request)
    {

        $course = Course::find($course->id);
        $course->name = request()->name;
        $course->duration = request()->duration;
        $course->cat_id = request()->category;
        $course->save();
        flash();
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        Course::find($course->id)->delete();
        flash();
        return redirect('course');
    }

    public function validateData($request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'category' => 'required',
        ]);

    }
}
