<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_code', 'Course Code:') !!}
    {!! Form::text('course_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
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
        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    </div>
</div>
