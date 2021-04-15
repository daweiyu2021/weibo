<tbody>
    @foreach($employees as $employee)
    <tr>
        <td><a href="{{ route('employees.show',$employee) }}">{{ $employee->name }}</a></td>
        <td>{{ $employee->identity }}</td>
        <td>{{ $employee->sex($employee->sex) }}</td>
        <td>{{ $employee->nation }}</td>
        <td>{{ $employee->address }}</td>
        <td>{{ $employee->birth_date }}</td>
        <td>{{ $employee->age() }}</td>
        <td>{{ $employee->phone }}</td>
        <td><span class="badge badge-success">在职</span></td>
        <td></td>
    </tr>
    @endforeach
</tbody>
