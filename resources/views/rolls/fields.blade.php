<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Login Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('login_time', 'Login Time:') !!}
    {!! Form::text('login_time', null, ['class' => 'form-control','id'=>'login_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#login_time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Logout Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    {!! Form::text('logout_time', null, ['class' => 'form-control','id'=>'logout_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#logout_time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush