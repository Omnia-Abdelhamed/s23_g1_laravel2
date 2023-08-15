<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Employee::select('SSN','fname','lname','dno')->get();
        return view('admin.employees.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deptData=Department::select('dno','dname')->get(); // select * from employees
        return view('admin.employees.create',['deptData'=>$deptData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create([
            'SSN'=>$request->ssn,
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'dno'=>$request->dno
        ]);

        return redirect()->back()->with('msg','Added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data=Employee::where('SSN',$id)->first();
        $data=Employee::findorfail($id);
        return view('admin.employees.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deptData=Department::select('dno','dname')->get();
        $data=Employee::findorfail($id);
        return view('admin.employees.edit',['deptData'=>$deptData,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee=Employee::findorfail($id);
        $employee->update([
            'SSN'=>$request->ssn,
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'dno'=>$request->dno
        ]);

        return redirect()->route('employees.index')->with('msg','updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employee::findorfail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('msg','deleted..');
    }
}
