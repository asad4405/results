@extends('layouts.frontend_master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-success">
                        <img src="{{ asset('frontend_assets/images/logo.png') }}" alt="" width="50">
                        <h3 class="text-center text-white">ABC School, Dhaka</h3>
                        <p class="text-center text-white">Class One to Ten Result</p>
                        <hr class="text-white">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('result.submit') }}" method="POST">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        <h5>Examination</h5>
                                    </label>
                                </div>
                                <div class="col-8">
                                    <select name="exam" class="form-select @error('exam') is-invalid @enderror">
                                        <option value="">Choose One</option>
                                        <option value="one">Class One</option>
                                        <option value="two">Class Two</option>
                                        <option value="three">Class Three</option>
                                        <option value="four">Class Four</option>
                                        <option value="five">Class Five</option>
                                        <option value="six">Class Six</option>
                                        <option value="seven">Class Seven</option>
                                        <option value="eight">Class Eight</option>
                                        <option value="nine">Class Nine</option>
                                        <option value="ten">Class Ten</option>
                                    </select>
                                    @error('exam')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        <h5>Year</h5>
                                    </label>
                                </div>
                                <div class="col-8">
                                    <select name="year" id="" class="form-select @error('year') is-invalid @enderror">
                                        <option value="">Choose One</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
                                    @error('year')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        <h5>Roll No.</h5>
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" class="form-control @error('roll_no') is-invalid @enderror" name="roll_no">
                                    @error('roll_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-4 mb-4">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        <h5>Registration No.</h5>
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" class="form-control @error('reg_no') is-invalid @enderror" name="reg_no">
                                    @error('reg_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success text-white">Get Result</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
