@extends('layouts.frontend_master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-success">
                        <img src="{{ asset('frontend_assets/images/logo.png') }}" alt="" width="50">
                        <h3 class="text-center text-white">ABC School, Dhaka</h3>
                        <p class="text-center text-white">Result of Final Examination</p>
                        <hr class="text-white">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    @foreach ($class_results as $class_result)
                                        <tr>
                                            <td class="bg-light">Roll No</td>
                                            <td class="bg-light">{{ $class_result->roll_no }}</td>
                                            <td class="bg-light">Registration No</td>
                                            <td class="bg-light">{{ $class_result->reg_no }}</td>
                                        </tr>
                                        <tr class="">
                                            <td>Name of Student</td>
                                            <td colspan="3">{{ $class_result->student->student_name }}</td>
                                        </tr>
                                        <tr class="">
                                            <td class="bg-light">Father's Name</td>
                                            <td class="bg-light" colspan="3">{{ $class_result->student->fathers_name }}
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>Mother's Name</td>
                                            <td colspan="3">{{ $class_result->student->mothers_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Class</td>
                                            <td class="bg-light">{{ $class_result->class_name }}</td>
                                            <td class="bg-light">Session</td>
                                            <td class="bg-light">{{ $class_result->year }}</td>
                                        </tr>
                                        <tr>
                                            <td>Group</td>
                                            <td>{{ $class_result->student->group }}</td>
                                            <td>Type: {{ $class_result->student->student_type }}</td>
                                            <td>Gender: {{ $class_result->student->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light">Result</td>
                                            <td class="bg-light">
                                                {{-- if class 1 - 3 --}}
                                                @php
                                                    function calculateGPA($score)
                                                    {
                                                        if ($score >= 80) {
                                                            return 5.0;
                                                        } elseif ($score >= 70 && $score < 80) {
                                                            return 4.0;
                                                        } elseif ($score >= 60 && $score < 70) {
                                                            return 3.5;
                                                        } elseif ($score >= 50 && $score < 60) {
                                                            return 3.0;
                                                        } elseif ($score >= 40 && $score < 50) {
                                                            return 2.5;
                                                        } elseif ($score >= 33 && $score < 40) {
                                                            return 2.0;
                                                        } else {
                                                            return 0.0;
                                                        }
                                                    }

                                                    $scores = [$class_result->bangla, $class_result->english, $class_result->math];
                                                    $totalGPA = 0;

                                                    foreach ($scores as $score) {
                                                        $totalGPA += calculateGPA($score);
                                                    }

                                                    $averageGPA = count($scores) > 0 ? $totalGPA / count($scores) : 0;

                                                    implode(',', $scores);
                                                    echo number_format($averageGPA, 2);
                                                @endphp
                                            </td>
                                            <td class="bg-light">Date of Birth</td>
                                            <td class="bg-light">{{ $class_result->student->birthday_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Name of Institute</td>
                                            <td colspan="3">{{ $class_result->student->school_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h5 class="text-center">Subject Wise Grade/Marks</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="bg-success text-white">Subject Name</th>
                                            <th class="bg-success text-white">Marks</th>
                                            <th class="bg-success text-white">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($class_results as $class_result)
                                            <tr class="">
                                                <td class="bg-light">Bangla</td>
                                                <td class="bg-light">{{ $class_result->bangla }}</td>
                                                <td class="bg-light">
                                                    @if ($class_result->bangla >= 80 && $class_result->bangla <= 100)
                                                        A+
                                                    @else
                                                        @if ($class_result->bangla >= 70 && $class_result->bangla < 80)
                                                            A
                                                        @else
                                                            @if ($class_result->bangla >= 60 && $class_result->bangla < 70)
                                                                A-
                                                            @else
                                                                @if ($class_result->bangla >= 50 && $class_result->bangla < 60)
                                                                    B
                                                                @else
                                                                    @if ($class_result->bangla >= 40 && $class_result->bangla < 50)
                                                                        C
                                                                    @else
                                                                        @if ($class_result->bangla >= 33 && $class_result->bangla < 40)
                                                                            D
                                                                        @else
                                                                            F
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr class="">
                                                <td>English</td>
                                                <td>{{ $class_result->english }}</td>
                                                <td>
                                                    @if ($class_result->english >= 80 && $class_result->english <= 100)
                                                        A+
                                                    @else
                                                        @if ($class_result->english >= 70 && $class_result->english < 80)
                                                            A
                                                        @else
                                                            @if ($class_result->english >= 60 && $class_result->english < 70)
                                                                A-
                                                            @else
                                                                @if ($class_result->english >= 50 && $class_result->english < 60)
                                                                    B
                                                                @else
                                                                    @if ($class_result->english >= 40 && $class_result->english < 50)
                                                                        C
                                                                    @else
                                                                        @if ($class_result->english >= 33 && $class_result->english < 40)
                                                                            D
                                                                        @else
                                                                            F
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="bg-light">Mathematics</td>
                                                <td class="bg-light">{{ $class_result->math }}</td>
                                                <td class="bg-light">
                                                    @if ($class_result->math >= 80 && $class_result->math <= 100)
                                                        A+
                                                    @else
                                                        @if ($class_result->math >= 70 && $class_result->math < 80)
                                                            A
                                                        @else
                                                            @if ($class_result->math >= 60 && $class_result->math < 70)
                                                                A-
                                                            @else
                                                                @if ($class_result->math >= 50 && $class_result->math < 60)
                                                                    B
                                                                @else
                                                                    @if ($class_result->math >= 40 && $class_result->math < 50)
                                                                        C
                                                                    @else
                                                                        @if ($class_result->math >= 33 && $class_result->math < 40)
                                                                            D
                                                                        @else
                                                                            F
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <a href="{{ route('result') }}" class="btn btn-info text-white">Search Again</a>
                                    <a href="" class="btn btn-success">Print</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
