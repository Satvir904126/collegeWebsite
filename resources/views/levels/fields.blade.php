<!-- Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level', 'Level:') !!}
    {!! Form::text('level', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course:') !!}
    {{-- {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
    --}}

    <select class="form-control" name="course_id" id="course_id">
        <option value="">Select Course</option>
        @foreach ($course as $item)
        <option value="{{ $item->course_id }}">{{ $item->course_name }}</option>

        @endforeach
    </select>
</div>

<!-- Level Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('level_description', 'Level Description:') !!}
    {!! Form::textarea('level_description', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>
