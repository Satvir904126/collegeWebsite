@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Classes</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($classes, ['route' => ['classes.update', $classes->class_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="modal-body d-flex col-sm-12">
                    <!-- Class Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('class_name', 'Class Name:') !!}
                        {!! Form::text('class_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' =>
                        255]) !!}
                    </div>

                    <!-- Class Code Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('class_code', 'Class Code:') !!}
                        {!! Form::text('class_code', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' =>
                        255]) !!}
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {!! Form::submit('Update Class', ['class' => 'btn btn-success']) !!}

                </div>
            </div>

            {{-- <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('classes.index') }}" class="btn btn-default">Cancel</a>
            </div> --}}

            {!! Form::close() !!}

        </div>
    </div>
@endsection
