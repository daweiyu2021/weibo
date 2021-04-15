<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>员工管理系统</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('employees.index') }}">Employees Manage System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="#">主页<span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('employees.create') }}">新增资料</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">导出数据</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">导出到Execl文件</a>
                        <a class="dropdown-item" href="#">导出为Pdf文档</a>
                        <a class="dropdown-item" href="#">导出为.txt</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">打印花名册</a></li>
            </ul>
        </div>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
@yield('content')
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
