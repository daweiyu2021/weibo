@extends('employees.layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body row">
            <div class="col-sm-3">
                <img src="http://weibo.test/storage/images/{{ $employee->name }}.jpg" class="img-thumbnail" alt="照片" style="width:180px;height:auto;">
            </div>
            <div class="col-sm-8">
                <h5 class="card-title">员工资料</h5>

            <dl class="row">
                <dd class="col-sm-2">姓名</dd>
                <dt class="col-sm-3 h5"><mark>{{ $employee->name }}</mark></dt>
                <dd class="col-sm-2 col-md-1">性别</dd>
                <dt class="col-sm-1 h5">{{ $employee->sex($employee->sex) }}</dt>
                <dd class="col-sm-2 col-md-1">民族</dd>
                <dt class="col-sm-2 h5">{{ $employee->nation }}</dt>
            </dl>
            <dl class="row">
                <dd class="col-sm-2">出生年月</dd>
                <dt class="col-sm-3 h5">{{ $employee->birth_date }}</dt>
                <dd class="col-sm-2 col-md-1">年龄</dd>
                <dt class="col-sm-2 h5">{{ $employee->age() }}</dt>
            </dl>
            <dl class="row">
                <dd class="col-sm-2">身份证号</dd>
                <dt class="col-sm-auto h4">{{ $employee->identity }}</dt>
            </dl>
            <dl class="row">
                <dd class="col-sm-2">身份证照</dd>
                <dt class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <figure class="figure">
                               <img src="http://weibo.test/storage/images/2.jpg" class="img-thumbnail img-reponsive" alt="证照正面" style="width:344px;height:216px;"/>
                               <figcaption class="figure-caption text-center">身份证正面</figcaption>
                           </figure>
                       </div>
                       <div class="col-sm-12 col-md-6">
                        <figure class="figure">
                            <img src="http://weibo.test/storage/images/2.jpg" class="img-thumbnail" alt="证照反面"  style="width:344px;height:216px;"/>
                            <figcaption class="figure-caption text-center">身份证反面</figcaption>
                        </figure>
                    </div>
                </div>
            </dt>
        </dl>
        <dl class="row">
            <dd class="col-sm-2">户籍地</dd>
            <dt class="col-sm-10 h5">{{ $employee->address }}</dt>
        </dl>
        <dl class="row">
            <dd class="col-sm-2">联系电话</dd>
            <dt class="col-sm-auto h5">{{ $employee->phone }}</dt>
        </dl>
        <dl class="row">
            <dd class="col-sm-2">入职时间</dd>
            <dt class="col-sm-3 col-md-2 h5">2018-11-10</dt>
            <dd class="col-sm-2">离职时间</dd>
            <dt class="col-sm-4 col-md-2 h5">2021-2-28</dt>
            <dd class="col-sm-2 col-md-1">工龄</dd>
            <dt class="col-sm-2 col-md-1 h5">3年</dt>
        </dl>
        <dl class="row">
            <dd class="col-sm-2">当前状态</dd>
            <dt class="col-sm-2"><span class="text-warning h5">请假</span></dt>
        </dl>

        <div class="row bg-ligth">
            <div class="col">
                <span class="badge badge-info">创建于: {{ $employee->created_at }}</span>
                <span class="badge badge-warning">最后修改: {{ $employee->updated_at }}</span>
            </div>
        </div>
        </div>
    </div>
</div>

@stop
