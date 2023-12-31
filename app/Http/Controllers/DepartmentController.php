<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Departments::all();
        return view('departments.index', compact('departments'));
    }

    public function store(Request $request)
    {
        $category = Departments::firstOrCreate([
            'department_name' => $request->department_name,
        ]);
        return redirect()->back();
    }

    public function update(Request $request, Departments $department)
    {
        $request->validate([
            'department_name' => 'required',
        ]);

        $department->update($request->all());

        return redirect()->route('department.index')->with('success', 'Department updated successfully.');
    }

    public function destroy(Departments $department)
    {
        $department->delete();

        return redirect()->route('department.index')->with('success', 'Department deleted successfully.');
    }
}
