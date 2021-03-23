@extends('layouts.frontPageLayout.app')
@section('content')
<h1>helooooo</h1>



{{-- <a data-toggle="modal" data-target="#settings" class="btn btn-primary float-right"> <i class=" fa fa-plus-circle">
        Change Password</i> --}}
</a>
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Class Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal body">
                modal body
            </div>

        </div>
    </div>
</div>


@endsection
