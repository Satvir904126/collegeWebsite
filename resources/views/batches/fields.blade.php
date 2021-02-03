{{-- model --}}
<div class=" modal fade" id="add-batch-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                <!-- Batch Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('batch', 'Batch Year:') !!}
                    {!! Form::text('batch', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255])
                    !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Create Batch', ['class' => 'btn btn-success']) !!}

            </div>
        </div>
    </div>
</div>
