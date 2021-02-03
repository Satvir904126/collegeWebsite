@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Batche</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($batche, ['route' => ['batches.update', $batche->batch_id], 'method' => 'patch']) !!}

            <!-- Batch Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('batch', 'Batch Year:') !!}
                {!! Form::text('batch', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Update Batch', ['class' => 'btn btn-info']) !!}

        </div>
        {!! Form::close() !!}

    </div>
    </div>
@endsection
