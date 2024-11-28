<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Jobdesk;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function welcome(){
        $employees = Employee::all();
        return view('welcome', compact('employees'));
    }

    public function store(Request $request){
        Employee::create([
            'name' => $request->name,
            'reason' => $request->reason,
            'join_date' => $request->join_date,
            'scale' => $request->scale,
            'job_id'=> $request->job_category
        ]);
        return redirect()->route('welcome');

    }

    public function createEmployee(){
        $jobdesks = Jobdesk::all();
        return view('createEmployee', compact('jobdesks'));
    }
}
