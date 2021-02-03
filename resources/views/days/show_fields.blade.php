<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Day:') !!}
    <p>{{ $days->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('Created_at', 'Created Date:') !!}
    <p>{{ $days->created_at }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated Date:') !!}
    <p>{{ $days->updated_at }}</p>
</div>
