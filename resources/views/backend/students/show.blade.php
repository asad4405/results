@extends('layouts.backend_master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Students /</span> Show Student</h4>

            @if (session('student-create-success'))
                <div class="alert alert-sucess">{{ session('student-create-success') }}</div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-10">
                    <div class="card mb-4">
                        <h5 class="card-header">All Students</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="table table-primary">
                                            <th>Header</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Student Name</td>
                                            <td>{{ $student->student_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Father's Name</td>
                                            <td>{{ $student->fathers_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mother's Name</td>
                                            <td>{{ $student->mothers_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Class</td>
                                            <td>{{ $student->class_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Session</td>
                                            <td>{{ $student->session_year }}</td>
                                        </tr>
                                        <tr>
                                            <td>Group</td>
                                            <td>{{ $student->group }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>{{ $student->phone_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Guardian's Phone Number</td>
                                            <td>{{ $student->guardians_phone_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Roll No.</td>
                                            <td>{{ $student->roll_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>Roll No.</td>
                                            <td>{{ $student->reg_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>Student Type</td>
                                            <td>{{ $student->student_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>{{ $student->address }}</td>
                                        </tr>
                                        <tr>
                                            <td>Birthday Date</td>
                                            <td>{{ $student->birthday_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Birthday Certificate No.</td>
                                            <td>{{ $student->birthday_certificate_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>School Name</td>
                                            <td>{{ $student->school_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ route('student.index') }}" class="btn btn-danger">Back</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
