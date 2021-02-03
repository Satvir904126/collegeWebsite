@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Teachers</h1>
                </div>
                <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#add-teacher-modal" class="btn btn-primary float-right">
                        <i class=" fa fa-plus-circle"> Add New Batch</i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('teachers.table')
                <div class="card">

                    {!! Form::open(['route' => 'teachers.store']) !!}

                    <div class="card-body">

                        <div class="row">
                            @include('teachers.fields')
                        </div>

                    </div>

                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                    {!! Form::close() !!}

                </div>
                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
