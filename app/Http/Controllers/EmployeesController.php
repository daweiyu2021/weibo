<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    // 员工列表
    public function index(){
        $employees = Employee::orderBy('id','desc')->paginate(12);
        return view('employees.index',compact('employees'));
    }
    // 显示员工信息
    public function show(Employee $employee){
        return view('employees.show',compact('employee'));
    }
    // 新建用户
    public function create(){
        return view('employees.create');
    }
    // 保存用户数据
    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|min:2',
            'nation'=> 'required',
            'identity'=> array(
                'required',
                'unique:employees,identity',
                'regex:/^[1-9]\d{5}(18|19|20)\d{2}((0[1-9])|(1[0-2]))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/',
            ),
            'address'=>'required|min:10',
            'phone'=> array(
                'nullable',
                'regex:/^13\d{9}$/',
            ),
            'avgator'=>'file|nullable'
        ]);
        // 头像文件
        $vagator_path = $request->file('avatar')->store('avatars');
        dd($vagator_path);
        /*************************************
        $Employee->create([
            'name'=>$request->name,
            'nation'=>$request->nation,
            'identity'=>$request->identity,
            'address'=>$request->address,
            'phone'=>$request->phone
        ]);
        ******************/
        dd($request);
        return ;
    }
}
