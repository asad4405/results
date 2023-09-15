@extends('layouts.backend_master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Students /</span> Add Student</h4>

            @if (session('student-create-success'))
                <div class="alert alert-sucess">{{ session('student-create-success') }}</div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Add New Student</h5>
                        <div class="card-body">
                            <form action="{{ route('student.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Student Name</label>
                                            <input name="student_name" value="{{ old('student_name') }}" type="text"
                                                class="form-control @error('student_name') is-invalid @enderror" placeholder="Student Name" />
                                        </div>
                                        @error('student_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Father's Name</label>
                                            <input name="fathers_name" value="{{ old('fathers_name') }}" type="text"
                                                class="form-control @error('fathers_name') is-invalid @enderror" placeholder="Father's Name" />
                                        </div>
                                        @error('fathers_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Mother's Name</label>
                                            <input name="mothers_name" value="{{ old('mothers_name') }}" type="text"
                                                class="form-control @error('mothers_name') is-invalid @enderror" placeholder="Mother's Name" />
                                        </div>
                                        @error('mothers_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Class</label>
                                            <select name="class_name" class="form-select @error('class_name') is-invalid @enderror">
                                                <option value="">Choose One</option>
                                                <option value="ONE">Class One</option>
                                                <option value="TWO">Class Two</option>
                                                <option value="THREE">Class Three</option>
                                                <option value="FOUR">Class Four</option>
                                                <option value="FIVE">Class Five</option>
                                                <option value="SIX">Class Six</option>
                                                <option value="SEVEN">Class Seven</option>
                                                <option value="EIGHT">Class Eight</option>
                                                <option value="NINE">Class Nine</option>
                                                <option value="TEN">Class Ten</option>
                                            </select>
                                        </div>
                                        @error('class_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Address</label>
                                            <input name="address" value="{{ old('address') }}" type="text"
                                                class="form-control @error('address') is-invalid @enderror" placeholder="Address" />
                                        </div>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Session</label>
                                            <input name="session_year" value="{{ old('session_year') }}" type="text"
                                                class="form-control @error('session_year') is-invalid @enderror" placeholder="Session Year" />
                                        </div>
                                        @error('session_year')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Group</label>
                                            <select name="group" class="form-select @error('group') is-invalid @enderror">
                                                <option value="">Choose One</option>
                                                <option value="SCIENCE">SCIENCE</option>
                                                <option value="BUSINESS STUDIES">BUSINESS STUDIES</option>
                                                <option value="HUMANITIES">HUMANITIES</option>
                                                <option value="N_A">N/A</option>
                                            </select>
                                        </div>
                                        @error('group')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Student Type</label>
                                            <select name="student_type" class="form-select @error('student_type') is-invalid @enderror">
                                                <option value="">Choose One</option>
                                                <option value="REGULAR">Regular</option>
                                                <option value="IRREGULAR">Irregular</option>
                                            </select>
                                        </div>
                                        @error('student_type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Gender</label>
                                            <select name="gender" class="form-select @error('gender') is-invalid @enderror">
                                                <option value="">Choose One</option>
                                                <option value="MALE">Male</option>
                                                <option value="FEMALE">Female</option>
                                            </select>
                                        </div>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Date of Birth</label>
                                            <input name="birthday_date" value="{{ old('birthday_date') }}"
                                                type="date" max="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
                                                class="form-control @error('birthday_date') is-invalid @enderror">
                                        </div>
                                        @error('birthday_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Birthday Certificate Number</label>
                                            <input name="birthday_certificate_no"
                                                value="{{ old('birthday_certificate_no') }}" type="number"
                                                class="form-control @error('birthday_certificate_no') is-invalid @enderror"
                                                placeholder="Birthday Certificate Number">
                                        </div>
                                        @error('birthday_certificate_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Institute Name</label>
                                            <select name="school_name" id="" class="form-select">
                                                <option value="ABC School">ABC School</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Phone Number</label>
                                            <input name="phone_number" value="{{ old('phone_number') }}" type="text"
                                                class="form-control @error('phone_number') is-invalid @enderror"
                                                placeholder="Phone Number">
                                        </div>
                                        @error('phone_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Guardian's Phone Number</label>
                                            <input name="guardians_phone_number" value="{{ old('guardians_phone_number') }}" type="text"
                                                class="form-control @error('guardians_phone_number') is-invalid @enderror"
                                                placeholder="Guardian's Phone Number">
                                        </div>
                                        @error('guardians_phone_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <button type="submit" class="btn btn-primary">Submit Student Form</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
