<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::all();
        return view('department', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newDepartment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameDepartment' => 'required'
        ]);

        $department = new Department;
        $department->name = $request->input('nameDepartment');
        $department->save();
        return redirect('/departments');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::find($id);
            if(isset($department)) {
                return view('editDepartment', compact('department'));
            }

            return redirect('/departments');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        if(isset($department)) {
            $department->name = $request->input('nameDepartment');
            $department->save();
        }

        return redirect('/departments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $department = Department::find($id);
            if (isset($department)) {
                $department->delete();
            }
        return redirect('/departments'); 
    }
}
