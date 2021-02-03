<!-- Academic Year Field -->
<div class="col-sm-12">
    {!! Form::label('academic_year', 'Academic Year:') !!}
    <p>{{ $academics->academic_year }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('', 'Created Day:') !!}
    <p>{{ $academics->created_at }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('', 'Update Day:') !!}
    <p>{{ $academics->updated_at }}</p>
</div>
