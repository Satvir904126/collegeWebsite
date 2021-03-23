@extends('layouts.app')

@section('content')
{{-- <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Assignings</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary float-right" href="{{ route('assignings.create') }}">
Add New
</a>
</div>
</div>
</div>
</section> --}}
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1>Class Assigning</h1>
            </div>
            <div class=" d-flex">

                <div class="" role="group" aria-label="Button group with nested dropdown" style=' '>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class=' fa fa-file-pdf' style='color:white'></i>
                            PDF
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a href="{{route('download-pdf')}}" class='btn '>Download PDF</a>
                            <a href="" class="btn">Import Pdf </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10">

                    <form class="d-flex" action="{{ route('searchSchedule') }}" method="get" style="width: 100%">
                        <input type=" text" name="seacrhSchedule" class="form-control"
                            placeholder="Search Schedule by Name">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i
                                    class="lnr lnr-magnifier">Search</i></button>
                        </span>
                    </form>

                </div>
                <div class="col-sm-6 float-right">
                    <a data-toggle="modal" data-target="#assign-model" class="btn btn-primary float-right" ">
                       <i class=" fa fa-plus-circle"> Assign Teacher</i>
                    </a>

                </div>

            </div>
        </div>
</section>

<div class="content px-3">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('assignings.table')

            <div class="card-footer clearfix float-right">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
