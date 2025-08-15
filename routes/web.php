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
    return view('course');
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

    return 'Course saved successfully!';
});

Route::get('/demo', function () {
    return view('demo');
});

Route::post('demo-save', function(Request $request) {
    $demo = new demo();
    $demo->name = $request->name;
    $demo->price = $request->price;
    $demo->duration = $request->duration;
    // image string saving
    $demo->save();
    return 'Demo saved successfully!';
});