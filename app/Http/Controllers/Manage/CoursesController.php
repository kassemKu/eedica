<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\User;
use App\Http\Requests\CourseValidation;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->hasRole(['teacher', 'author', 'editor'])) {
            $courses = Course::whereUserId(\Auth::id())->get();
        } else {
            $courses = Course::with('user')->latest()->paginate(10);
        }
        
        return view('manage.courses.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = User::whereRoleIs('teacher')->get();
        return view('manage.courses.create')->withTeachers($teachers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseValidation $request)
    {
        $course = new Course();
        $course->title = $request->title;
        $course->user_id = !$request->teacher ? \Auth::id() : $request->teacher;
        $course->slug = $request->slug;
        $course->description = $request->description;
        // if($request->course_img) {
        //     $course->addMedia($request->course_img)->toMediaCollection('course_img');
        // }
        if($request->price) {
            $course->price = $request->price;
        }
        $course->free_course = $request->free_course === 'free_course' ? 1 : 0;
        $course->publish = $request->publish === "on" ? 1 : 0;
        $course->save();

        return redirect()->route('courses.show', $course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course= Course::where('id', $id)->first();
        $teacher = User::where('id', $course->user_id)->first();
        return view('manage.courses.show', compact('teacher', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
