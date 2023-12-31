@extends('layouts.backend_master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Students /</span> All Students</h4>

            @if (session('student-create-success'))
                <div class="alert alert-sucess">{{ session('student-create-success') }}</div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-12">
                    <div class="card mb-4">
                        <h5 class="card-header">All Students</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="table table-primary">
                                            <th>SL</th>
                                            <th>Student Name</th>
                                            <th>Class</th>
                                            <th>Phone Number</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($students as $student)
                                            <tr class="">
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $student->student_name }}</td>
                                                <td>{{ $student->class_name }}</td>
                                                <td>{{ $student->phone_number }}</td>
                                                <td>
                                                    <a href="{{ route('student.show', $student->id) }}"
                                                        class="btn btn-sm bg-success text-white">
                                                        Show
                                                    </a>
                                                    <a href="{{ route('student.edit', $student->id) }}"
                                                        class="btn btn-sm bg-info text-white">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('student.destroy',$student->id) }}" method="POST" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm bg-danger text-white">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>No Student Available</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
