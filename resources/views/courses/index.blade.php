@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Courses</h1>
                </div>
                <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#add-course-model" class="btn btn-primary float-right"
                       ">
                       <i class="fa fa-plus-circle"> Add New Course</i>
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
                @include('courses.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        {!! Form::open(['route' => 'courses.store']) !!}

                        <div class="card-body">

                            <div class="row">
                                @include('courses.fields')
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection





