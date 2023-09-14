@extends('layouts.backend_master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Students /</span> Add Student</h4>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Add New Student</h5>
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Student Name</label>
                                            <input type="text" class="form-control" placeholder="Student Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Father's Name</label>
                                            <input type="text" class="form-control" placeholder="Father's Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Mother's Name</label>
                                            <input type="text" class="form-control" placeholder="Mother's Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Session</label>
                                            <input type="text" class="form-control" placeholder="Session Year" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Group</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">Choose One</option>
                                                <option value="">SCIENCE</option>
                                                <option value="">BUSINESS STUDIES</option>
                                                <option value="">HUMANITIES</option>
                                                <option value="">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Student Type</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">Choose One</option>
                                                <option value="">Regular</option>
                                                <option value="">Irregular</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Gender</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">Choose One</option>
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-2 mb-3">
                                            <label for="" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control">
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
