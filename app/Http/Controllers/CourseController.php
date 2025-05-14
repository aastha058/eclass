<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $courses=Course::all();
        return view("admin.managecourses", compact("courses"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.insertcourse', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            "title"=> "required|string|max:255",
            "auther"=> "required|string|max:255",
            "category_id"=> "required|exists:categories,id",
            "fees"=> "required|numeric|min:0",
            "discount_price"=> "nullable|numeric|min:0",
            "description"=> "required|string",
            "duration"=> "required|integer|min:1",
            "image"=> "required|image|mimes:jpeg,png,jpg,gif,jfif,webp|max:2048",
        ]);

        $data['image'] = $request->file('image')->store('course_images', 'public');

        $course = Course::create($data);
        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
      
    }
}
