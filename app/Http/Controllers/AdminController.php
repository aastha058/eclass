<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $countstudents =User::where("status",true)->count();
        $countadminssions =User::where("status",false)->count();
        $countcategorys = Category::count();
        $countcourses = Course::count();
        return view("admin.dashboard",compact("countstudents","countadminssions","countcategorys","countcourses"));
    }
    
    public function manageadmission(){
        $adminssions =User::where("status",false)->get();
        return view('admin.manageadmission',compact("adminssions"));
    }
    
    public function managestudent(){
        $students =User::where("status",true)->get();
        return view('admin.managestudent',compact("students"));
    }
    public function studentapprove(user $user){
       // if($user->status){
        //    return redirect()->route('admin.managestudent')->with("msg","This Student Already Approve");
       // }
      $user->update(["status"=>1]);
      return redirect()->route('admin.managestudent')->with("msg"," Student Approve successfully");
    }
    
}
