@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Class Schedules</h1>
                </div>
                <div class="col-sm-6">

                    <a data-toggle="modal" data-target="#add-classschedule-modal" class="btn btn-primary float-right">
                        <i class=" fa fa-plus-circle"> Generate Schedule</i>
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
                @include('class_schedulings.table')
                <div class="card">

                    {!! Form::open(['route' => 'classSchedulings.store']) !!}

                    <div class="card-body">

                        <div class="row">
                            @include('class_schedulings.fields')
                        </div>

                    </div>



                    {!! Form::close() !!}


                </div>

            </div>
        </div>

    @endsection
