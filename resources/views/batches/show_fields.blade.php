<!-- Batch Field -->
<div class="col-sm-12">
    {!! Form::label('batch', 'Batch:') !!}
    <p>ID:{{ $batche->batch_id }}</p>
    <p>Year:{{ $batche->batch }}</p>
    <p>Created Date:{{ $batche->created_at }}</p>
    <p>Update Date:{{ $batche->updated_at }}</p>
</div>
