<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Home extends Component
{
    public $lvSearch;
    public $student;

//    public $queryString;

    public function SearchStudentName()
    {
        return $this->student = Student::where('name','like','%'. $this->lvSearch .'%')->get();
    }

    public function render()
    {
        return view('livewire.home')
            ->extends('layouts.app');
    }
}
