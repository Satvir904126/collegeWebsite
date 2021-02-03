@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-home"> Class Rooms</i></h1>
                </div>
                <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#add-classroom-modal" class="btn btn-primary float-right">
                        <i class=" fa fa-plus-circle">Add New Room</i> </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('classrooms.table')

                {!! Form::open(['route' => 'classrooms.store']) !!}

                <div class="card-body">

                    <div class="row">
                        @include('classrooms.fields')
                    </div>

                </div>

                {{-- <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>
                </div> --}}

                {!! Form::close() !!}
                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
