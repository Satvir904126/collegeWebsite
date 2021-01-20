<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $transactions->student_id }}</p>
</div>

<!-- Fee Id Field -->
<div class="col-sm-12">
    {!! Form::label('fee_id', 'Fee Id:') !!}
    <p>{{ $transactions->fee_id }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $transactions->user_id }}</p>
</div>

<!-- Paid Amount Field -->
<div class="col-sm-12">
    {!! Form::label('paid_amount', 'Paid Amount:') !!}
    <p>{{ $transactions->paid_amount }}</p>
</div>

<!-- Transaction Date Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    <p>{{ $transactions->transaction_date }}</p>
</div>

<!-- Remark Field -->
<div class="col-sm-12">
    {!! Form::label('remark', 'Remark:') !!}
    <p>{{ $transactions->remark }}</p>
</div>

<!-- Describtion Field -->
<div class="col-sm-12">
    {!! Form::label('describtion', 'Describtion:') !!}
    <p>{{ $transactions->describtion }}</p>
</div>

