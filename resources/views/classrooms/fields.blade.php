{{-- model --}}
<div class=" modal fade" id="add-classroom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
            <!-- Classroom Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('classroom_name', 'Classroom Name:') !!}
                {!! Form::text('classroom_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' =>
                255]) !!}
            </div>

            <!-- Classroom Code Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('classroom_code', 'Classroom Code:') !!}
                {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Classroom Description Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('classroom_description', 'Classroom Description:') !!}
                {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Classroom Status Field -->
            <div class="form-group col-sm-6">
                <div class="form-check">
                    {!! Form::hidden('classroom_status', 0, ['class' => 'form-check-input']) !!}
                    {!! Form::checkbox('classroom_status', '1', null, ['class' => 'form-check-input']) !!}
                    {!! Form::label('classroom_status', 'Classroom Status', ['class' => 'form-check-label']) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Create Room', ['class' => 'btn btn-success']) !!}

            </div>
        </div>
    </div>
</div>
