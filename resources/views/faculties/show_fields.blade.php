<!-- Faculty Name Field -->
<div class="col-sm-12">
    {!! Form::label('faculty_name', 'Faculty Name:') !!}
    <p>{{ $faculties->faculty_name }}</p>
</div>

<!-- Faculty Code Field -->
<div class="col-sm-12">
    {!! Form::label('faculty_code', 'Faculty Code:') !!}
    <p>{{ $faculties->faculty_code }}</p>
</div>

<!-- Faculty Description Field -->
<div class="col-sm-12">
    {!! Form::label('faculty_description', 'Faculty Description:') !!}
    <p>{{ $faculties->faculty_description }}</p>
</div>

<!-- Faculty Status Field -->
<div class="col-sm-12">
    {!! Form::label('faculty_status', 'Faculty Status:') !!}
    <p>{{ $faculties->faculty_status }}</p>
</div>

