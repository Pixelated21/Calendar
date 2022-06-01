<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StudentListChild extends Component
{
    public $student;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $studentDob)
    {
//        $this->student_dob = $student_dob;


        $this->student = $studentDob;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public  function render()
    {
        return view('components.student-list-child');
    }
}
