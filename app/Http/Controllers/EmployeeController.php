<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $factories = Factory::all();
        $employees = Employee::when($search, function ($query, $search) {
            return $query->where('firstname', 'like', "%{$search}%")
                ->orWhere('lastname', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhereHas('factory', function ($query) use ($search) {
                    $query->where('factory_name', 'like', "%{$search}%");
                });
        })->paginate(10);

        return view('employees.index', compact('employees', 'factories', 'search'));
    }

    public function create()
    {
        $factories = Factory::all();
        return view('employees.create', compact('factories'));
    }

    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $factories = Factory::all();
        return view('employees.edit', compact('employee', 'factories'));
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
