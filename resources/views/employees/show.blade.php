@extends('employees.layout')
@section('content')
    <div class="container" style="margin-top: 15px;">
        <p>详细资料：{{ $employee->name }}</p>
        <div class="row">
            <div class="col-5">姓名: <h5> {{ $employee->name }}</h5></div>
            <div class="col-3">性别：<h5> {{ $employee->sex($employee->sex) }}</h5></div>
            <div class="col-3">民族：<h5>{{ $employee->nation }}</h5></div>
            <div class="col-5">出生年月：<h5>{{ $employee->birth_date }}</h5></div>
            <div class="col-3">现龄<h5>{{ $employee->age() }}</h5></div>
            <div class="col-sm-9">身份证号码：<h4>{{ $employee->identity }}</h4></div>
            <div class="col-sm-9">地址：<h5>{{ $employee->address }}</h5></div>
            <div class="col-sm-9">联系电话：<h5>{{ $employee->phone }}</h5></div>
        </div>
        <div class="row bg-ligth">
            <div class="col">
                <span class="badge badge-pill badge-info">创建于: {{ $employee->created_at }}</span>
                <span class="badge badge-pill badge-warning">最后修改: {{ $employee->updated_at }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="checkbox">
                    <label class="checkbox">
                        <input type="checkbox" name="hobby">唱歌
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="hobby">跳舞
                    </label>
                </div>
            </div>
        </div>
    </div>
@stop
