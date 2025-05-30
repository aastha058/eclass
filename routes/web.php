<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(PublicController::class)->group(function(){


    Route::get("/","home")->name("public.home");
    Route::match(["get","post"],"/apply","apply")->name("public.apply");
    Route::match(["get","post"],"/student/login","login")->name("login");
    Route::get("/logout","studentlogout")->name("public.logout");
});

Route::middleware("auth")->group(function(){
    Route::controller(StudentController::class)->group(function(){
        Route::prefix("student")->group(function(){
           Route::get("/","dashboard")->name("students.dashboard");
        });
   });

   Route::controller(AdminController::class)->group(function(){
    
    Route::prefix("admin")->group(function(){
          Route::get("/","dashboard")->name("admin.dashboard");
          Route::get("/admission","manageadmission")->name("admin.manageadmission");
          Route::get("/admission/{user}/approve","studentapprove")->name("admin.studentapprove");
          Route::get("/students","managestudent")->name("admin.managestudent");
          Route::resource("categories",CategoryController::class)->except('show');
          Route::resource("course",CourseController::class);
    });
   });
});

