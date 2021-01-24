{{-- model --}}
<div class="  ">
<div class=" modal fade" id="add-course-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog     modal-dialog-centere modal-lg " role="document">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


<!-- Course Name Field -->
<div class="form-group col-sm-12 d-flex mt-4">
    <div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Code Field -->
<div class="form-group col-sm-6">

    {!! Form::label('course_code', 'Course Code:') !!}
    {!! Form::text('course_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
</div>

<!-- Describtion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('describtion', 'Describtion:') !!}
    {!! Form::textarea('describtion', null, ['class' => 'form-control']) !!}
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('status', 'Status') !!}
    </div>
</div>

{{-- model body --}}
<div class="modal-body">

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    {!! Form::submit('Save Course', ['class' => 'btn btn-success']) !!}
</div>
</div>
</div>
</div>
</div>
