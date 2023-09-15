@extends('layouts.backend_master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Results /</span> Add Result</h4>

            @if (session('student-create-success'))
                <div class="alert alert-sucess">{{ session('student-create-success') }}</div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-7">
                    <div class="card mb-4">
                        <h5 class="card-header">Class One Add Result</h5>
                        <div class="card-body">
                            <form action="{{ route('result.store') }}" method="POST">
                                @csrf
                                <div class="mt-2">
                                    <label for="" class="form-label">Roll Noumber</label>
                                    <select name="roll_no" id="" class="form-select">
                                        <option value="">Choose One</option>
                                        @foreach ($students as $student)
                                            @if ($student->class_name == 'ONE')
                                                <option value="{{ $student->roll_no }}">({{ $loop->index + 1 }})
                                                    {{ $student->roll_no }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('roll_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="" class="form-label">Registration Number</label>
                                    <select name="reg_no" id="" class="form-select">
                                        <option value="">Choose One</option>
                                        @foreach ($students as $student)
                                            @if ($student->class_name == 'ONE')
                                                <option value="{{ $student->reg_no }}">({{ $loop->index + 1 }})
                                                    {{ $student->reg_no }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('reg_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="" class="form-label">Year</label>
                                    <select name="year" id="" class="form-select">
                                        <option value="">Choose One</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                    @error('year')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="" class="form-label">Class Name</label>
                                    <select name="class_name" id="" class="form-select">
                                        <option value="ONE">ONE</option>
                                    </select>
                                    @error('class_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="" class="form-label">Bangla Marks</label>
                                    <input type="number" name="bangla" class="form-control" placeholder="Bangla Marks">
                                    @error('bangla')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="" class="form-label">English Marks</label>
                                    <input type="number" name="english" class="form-control" placeholder="English Marks">
                                    @error('english')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="" class="form-label">Math Marks</label>
                                    <input type="number" name="math" class="form-control" placeholder="Math Marks">
                                    @error('math')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <label for="" class="form-label">Result Publish Date</label>
                                    <input type="date" name="result_publish" class="form-control">
                                    @error('result_publish')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Submit Class One Result</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
