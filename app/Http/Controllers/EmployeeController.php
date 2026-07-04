<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $query = Employee::with('user');

        if ($request->filled('search')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('type') && $request->type !== 'All') {
            $query->where('staff_type', $request->type);
        }

        $employees = $query->paginate(10);
        return view('employees', compact('employees'));
    }

    public function create()
    {
        return view('add_employee');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'staff_type' => 'required|string|in:Permanent,Temporal',
        ]);

        // Create the User account for login
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'user', // Ensures they are not an admin
        ]);

        // Create the Employee details linked to the User
        // Note: Ensure you have an Employee model and migration for this
        Employee::create([
            'user_id' => $user->id,
            'employee_id' => 'EMP-' . str_pad($user->id, 3, '0', STR_PAD_LEFT),
            'job_title' => $validated['job_title'],
            'department' => $validated['department'],
            'staff_type' => $validated['staff_type'],
        ]);

        return redirect('/employees')->with('success', 'Employee added successfully!');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        // Deleting the user will cascade delete the employee record due to migration constraints
        $employee->user->delete();
        return redirect('/employees')->with('success', 'Employee deleted successfully');
    }

    public function edit($id)
    {
        $employee = Employee::with('user')->findOrFail($id);
        return view('edit_employee', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::with('user')->findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $employee->user_id,
            'password' => 'nullable|string|min:8', // Password is optional during edit
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'staff_type' => 'required|string|in:Permanent,Temporal',
        ]);

        $employee->user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            // Only update password if a new one is provided
            'password' => $validated['password'] ? Hash::make($validated['password']) : $employee->user->password,
        ]);

        $employee->update([
            'job_title' => $validated['job_title'],
            'department' => $validated['department'],
            'staff_type' => $validated['staff_type'],
        ]);

        return redirect('/employees')->with('success', 'Employee updated successfully!');
    }
}
