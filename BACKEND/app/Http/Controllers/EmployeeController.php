<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function viewController(Request $request)
    {
        return response()->json(view('employee.view', ['employee' => Employee::find($request->id)])->render());
    }

    public function create(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return redirect()->route('employee.index');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    public function update(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully');
    }
}
