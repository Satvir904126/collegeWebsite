@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Classroom</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($classroom, ['route' => ['classrooms.update', $classroom->classroom_id], 'method' => 'patch'])
            !!}

            <div class="card-body">
                <div class="modal-body  col-sm-12">
                    <div class="d-flex">
                        <div class="form-group col-sm-6">
                            {!! Form::label('classroom_name', 'Classroom Name:') !!}
                            {!! Form::text('classroom_name', null, ['class' => 'form-control', 'maxlength' => 255,
                            'maxlength' => 255]) !!}
                        </div>

                        <!-- Classroom Code Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('classroom_code', 'Classroom Code:') !!}
                            {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <!-- Classroom Description Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('classroom_description', 'Classroom Description:') !!}
                        {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Classroom Status Field -->
                    <div class="form-group col-sm-6">
                        <div class="form-check">
                            {!! Form::hidden('classroom_status', 0, ['class' => 'form-check-input']) !!}
                            {!! Form::checkbox('classroom_status', '1', null, ['class' => 'form-check-input']) !!}
                            {!! Form::label('classroom_status', 'Classroom Status') !!}
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Update Room', ['class' => 'btn btn-success']) !!}

            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
