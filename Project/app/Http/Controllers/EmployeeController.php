<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    public function index() {
		$employees = Employee::All();
		return view('pages.employees', compact('employees'));
	}
	public function show($id) {
		$employee = Employee::findOrFail($id);
		return view('pages.employee', compact('employee'));
	}

}
