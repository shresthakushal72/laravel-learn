<?php

use App\Models\Course;
use App\Models\demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

Route::get('/', function () {
    return view('homepage');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    $courses = Course::all();
    // Pass the courses to the view
    return view('course', compact('courses'));
});

Route::post('/save-cource', function (Request $request) {


    // form form request to model database

    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;
    // image string saving
    if ($request->hasFile('image')) {
       $file = $request->file('image');
       $filename = time() .'.'. $file->getClientOriginalName();
       $file->move(('images'), $filename);
       $course->image = 'images/'.$filename;
    } 
    $course->save();

    return redirect('/courses/')->with('success', 'Course saved successfully!');
});

Route::put('/edit-course/{id}', function ($id) {
    // Find the course by ID
    $course = Course::findOrFail($id);
    return view('update-courses', compact('course'));
});

// Route to update a course
// This route will handle the update of a course by its ID
// It uses the Course model to find the course and update its details.
// The route expects a PUT request with the course ID in the URL.
// It also handles file uploads for the course image.
// After updating, it redirects to the courses page with a success message.
Route::put('/update-course/{id}', function (Request $request, $id) {
    $course = Course::findOrFail($id);
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move(('images'), $filename);
        $course->image = 'images/' . $filename;
    }

    $course->save();
    return redirect('/courses')->with('success', 'Course updated successfully!');
});
// Route to delete a course
// This route will handle the deletion of a course by its ID
// It uses the Course model to find the course and delete it from the database.
// The route expects a DELETE request with the course ID in the URL.
// It returns the course object before deletion for confirmation purposes.


Route::delete('/delete-course/{id}', function($id){
    $course = Course::findOrFail($id);
    $course->delete();
    return redirect('/courses');
});




Route::get('/demo', function () {
    return view('demo');
});

Route::post('/demo-save', function(Request $request) {
    $demo = new demo();
    $demo->name = $request->name;
    $demo->price = $request->price;
    $demo->duration = $request->duration;
    // image string saving
    $demo->save();
    return 'Demo saved successfully!';
});