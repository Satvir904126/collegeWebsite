{{-- model --}}
<div class=" modal fade" id="add-smester-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
            <!-- Semester Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('semester_name', 'Semester Name:') !!}
                {!! Form::text('semester_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' =>
                255]) !!}
            </div>

            <!-- Semester Code Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('semester_code', 'Semester Code:') !!}
                {!! Form::text('semester_code', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' =>
                255]) !!}
            </div>

            <!-- Semester Duration Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('semester_duration', 'Semester Duration:') !!}
                {!! Form::text('semester_duration', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' =>
                255]) !!}
            </div>

            <!-- Semester Description Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('semester_description', 'Semester Description:') !!}
                {!! Form::textarea('semester_description', null, ['class' => 'form-control']) !!}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Add Semester', ['class' => 'btn btn-success']) !!}

            </div>
        </div>
    </div>
</div>
