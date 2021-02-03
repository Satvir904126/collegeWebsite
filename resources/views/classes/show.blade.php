@extends('layouts.app')
{{-- model --}}
<div class=" modal fade" id="view-class-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centere modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- model body --}}
            <div class="modal-body">
                @section('content')
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Classes Details</h1>
                                </div>
                                <div class="col-sm-6">
                                    <a class="btn btn-default float-right" href="{{ route('classes.index') }}">
                                        Back
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="content px-3">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    @include('classes.show_fields')
                                </div>
                            </div>

                        </div>
                    </div>
                @endsection


            </div>
        </div>
    </div>
</div>
