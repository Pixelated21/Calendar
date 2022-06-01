<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
       $lists = Student::all();

        return view('list.index',compact(['lists']));
    }
}
