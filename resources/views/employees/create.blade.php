@extends('employees.layout')
@section('content')
<div class="container" style="margin-top: 15px;">
    <p>新增员工资料</p>
    @include('shared._errors')
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col from-group">
                <label for="">姓名</label>
                <input type="text" class="form-control" id="name" name='name' placeholder="姓名" value="{{ old('name') }}">
            </div>
            <div class="col from-group">
                <label for="nation">民族</label>
                <input type="text" class="form-control" id="nation" name="nation" value="{{ old('nation') }}">
            </div>
        </div>
        <div class="from-group">
            <label for="identity">身份证号</label>
            <input type="text" class="form-control" id="identity" name="identity" value="{{ old('identity') }}">
            <small id="nameHelp" class="form-text text-muted">请仔细输入身份证号码，系统将自动验证身份证号码是否正确，并且生日和性别也将从此获得信息。</small>
        </div>
        <div class="from-group">
            <label for="address">地址</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
        </div>
        <div class="from-group">
            <label for="phone">联系电话</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
        </div>
        <div class="from-group">
            <label for="avatar">用户照片</label>
            <input type="file" class="form-control form-control-file" id="avatar" name="avatar">
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-info">保存数据</button>
        </div>
    </form>
</div>
@stop
