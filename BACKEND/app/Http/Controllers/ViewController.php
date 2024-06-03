<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showEmployees()
    {
        $employees = Employee::all();
        return view('employees', ['employees' => $employees]);
    }
}
?>