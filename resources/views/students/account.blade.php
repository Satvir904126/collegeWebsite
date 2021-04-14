@extends('layouts.frontPageLayout.app')
@section('content')
<table class="table" id="semesters-table">
    <thead>
        <tr>
            <th>Teacher Name</th>
            <th>Attendance</th>
            <th>Grades</th>
        </tr>
    </thead>
    {{-- {{ dd($attendGrade)}} --}}
    @if ($attendGrade != null)
    <tbody>
        @foreach ($attendGrade as $attendgrades )
        <tr>
            {{-- teacher first and last name --}}
            <td>{{$attendgrades->first_name}}{{" "}}{{$attendgrades->last_name}}</td>
            <td>{{$attendgrades->attendance}}%</td>
            <td>{{$attendgrades->grades}}%</td>


        </tr>
        @endforeach
    </tbody>

    @else

    <td>
        <h2>No Attendace and grades yet</h2>
    </td>
    @endif



</table>



{{-- <a data-toggle="modal" data-target="#settings" class="btn btn-primary float-right"> <i class=" fa fa-plus-circle">
        Change Password</i> --}}
{{-- </a> --}}
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Class Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal body">
                modal body
            </div>

        </div>
    </div>
</div>


@endsection
