@extends('components.layouts.html')
@section('title', 'Employees')
@section('content')
    @include('components.modal')
    <h2 class="text-xl font-semibold mb-5">Employees</h2>
    <div class="grid grid-rows-4 gap-8">
        <div class="card p-5 m-2 border rounded bg-white">
            <div class="card-header">
                <div class="flex">
                    <h3 class="text-lg font-semibold">Employee List</h3> 
                    <a href="">
                        <div class="bg-green-700 ms-2 mt-1 px-1 rounded">
                            <i class="fa-solid fa-plus text-white"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table-auto w-full" id="employeeTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->status }}</td>
                                <td>
                                    <i class="fas fa-edit text-blue-500 me-3"></i>
                                    <i class="fas fa-trash text-red-500"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#employeeTable').DataTable();
        });
    </script>
@endsection
