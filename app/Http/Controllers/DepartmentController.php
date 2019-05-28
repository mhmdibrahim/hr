<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function show(){
        $depts = DB::table('departments')->paginate(8);
        return view('departments.show')->with('depts',$depts);
    }
    public function add(){
        return view('departments.add');
    }

    public  function storeDepartment(Request $request){
        if (!empty($request->department_id) && !empty($request->department_name)){
            DB::table('departments')->insert([
                'department_id'=>$request->department_id,
                'department_name'=>$request->department_name,
                'manager_id'=>$request->manager_id,
                'location_id'=>$request->location_id,
            ]);
            return redirect()->route('departments.show');
        }
    }

    public function edit($id){
        $dept = DB::table('departments')->where('department_id',$id)->first();
        return view('departments.edit')->with('dept',$dept);
    }
    public function update(Request $request){
        if (!empty($request->department_name)){
        DB::table('departments')->where('department_id',$request->department_id)
            ->update([
                'department_name'=>$request->department_name,
                'manager_id'=>$request->manager_id,
                'location_id'=>$request->location_id,
            ]);
        }
        else{
            return redirect()->action('DepartmentController@edit',['id'=>$request->department_id]);
        }
        return redirect()->route('departments.show');
    }

    public function delete($id){
        DB::table('departments')->where('department_id',$id)->delete();
        return redirect()->route('departments.show');
    }
}
