@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Semester</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($semester, ['route' => ['semesters.update', $semester->semester_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    <div class="modal-body  col-sm-12">
                        <!-- Semester Name Field -->
                        <div class="d-flex">
                            <div class="form-group col-sm-4">
                                {!! Form::label('semester_name', 'Semester Name:') !!}
                                {!! Form::text('semester_name', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!}
                            </div>

                            <!-- Semester Code Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('semester_code', 'Semester Code:') !!}
                                {!! Form::text('semester_code', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!}
                            </div>

                            <!-- Semester Duration Field -->
                            <div class="form-group col-sm-4">
                                {!! Form::label('semester_duration', 'Semester Duration:') !!}
                                {!! Form::text('semester_duration', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!}
                            </div>
                        </div>
                        <!-- Semester Description Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('semester_description', 'Semester Description:') !!}
                            {!! Form::textarea('semester_description', null, [
                            'class' => 'form-control ',
                            'rows' => '3',
                            ]) !!}

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Update Smester', ['class' => 'btn btn-success']) !!}

            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
