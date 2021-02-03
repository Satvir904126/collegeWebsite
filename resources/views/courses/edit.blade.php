@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Courses</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')
        <div class="card">

            {!! Form::model($courses, ['route' => ['courses.update', $courses->course_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('courses.fields') --}}


                    <!-- Course Name Field -->
                    <div class="form-group col-sm-12 d-flex mt-4">
                        <div class="form-group col-sm-6">
                            {!! Form::label('course_name', 'Course Name:') !!}
                            {!! Form::text('course_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength'
                            => 255]) !!}
                        </div>

                        <!-- Course Code Field -->
                        <div class="form-group col-sm-6">

                            {!! Form::label('course_code', 'Course Code:') !!}
                            {!! Form::text('course_code', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength'
                            => 255]) !!}
                        </div>
                    </div>

                    <!-- Describtion Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('describtion', 'Describtion:') !!}
                        {!! Form::textarea('describtion', null, ['class' => 'form-control, row => 5 cols =>4']) !!}
                    </div>


                    <!-- Status Field -->
                    <div class="form-group col-sm-6">
                        <div class="form-check">
                            {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
                            {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
                            {!! Form::label('status', 'Status') !!}
                        </div>
                    </div>

                    {{-- model body --}}
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {!! Form::submit('Update Course', ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
            </div>


        </div>
    </div>



    {!! Form::close() !!}
@endsection
