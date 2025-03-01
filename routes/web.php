<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs);
    //return view('home');
});
Route::get('/jobs', function () {
    $jobs = Job::all(); // Dobavljamo sve poslove
    return view('jobs', ['jobs' => $jobs]); // Prosleđujemo u view
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = Job::find($id);


    return view('job', ['job'=> $jobs]);
});

Route::get('/contacts', function () {
    return view('contacts');
});

