@extends('layouts.backend_master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Subjects /</span> Add Subject</h4>

            @if (session('student-create-success'))
                <div class="alert alert-sucess">{{ session('student-create-success') }}</div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-7">
                    <div class="card mb-4">
                        <h5 class="card-header"> Add Subject</h5>
                        <div class="card-body">
                            <form action="{{ route('subject.store') }}" method="POST">
                                @csrf
                                <div class="mt-2">
                                    <label for="" class="form-label">Subject Name</label>
                                    <input name="subject_name" value="{{ old('subject_name') }}" type="text"
                                        class="form-control @error('subject_name') is-invalid @enderror"
                                        placeholder="Subject Name" />
                                </div>
                                @error('subject_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Add Subject</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
