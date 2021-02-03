@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Academics</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($academics, ['route' => ['academics.update', $academics->academic_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-6">
                        {!! Form::label('academic_year', 'Academic Year:') !!}
                        {!! Form::text('academic_year', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' =>
                        255]) !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {!! Form::submit('Update Academic Year', ['class' => 'btn btn-success']) !!}

                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    @endsection
