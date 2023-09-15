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
                <div class="col-md-6 col-lg-10">
                    <div class="card mb-4">
                        <h5 class="card-header">All Students</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="table table-primary">
                                            <th>SL</th>
                                            <th>Subject Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($subjects as $subject)
                                            <tr class="">
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $subject->subject_name }}</td>
                                                <td>
                                                    <a href="{{ route('subject.edit', $subject->id) }}"
                                                        class="btn btn-sm bg-info text-white">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('subject.destroy', $subject->id) }}"
                                                        method="POST" style="display: inline-block">
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
    </div>
@endsection
