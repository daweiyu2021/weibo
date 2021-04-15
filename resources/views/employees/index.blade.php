@extends('employees.layout')
@section('content')
<div class="container">
    <h5>Employees Manage System</h5>
    <table class="table table-light table-striped table-hover">
        @include('employees._employee_header')
        @include('employees._employee_body')
    </table>
    {!! $employees->render() !!}
</div>
@stop
