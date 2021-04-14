<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roll_no', 'Roll No:') !!}

    {{-- {!! Form::number('student_id', null, ['class' => 'form-control']) !!} --}}

    <select class="form-control" name="student_id" id="roll_no">
        <option value="">Select Roll No</option>
        @foreach ($admission as $item)
        <option value="{{ $item->student_id }}">{{ $item->roll_no }}</option>

        @endforeach
    </select>

</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}

    <select class="form-control" name="username" id="username">
        <option value="">Select UserName</option>
        {{-- @foreach ($levels as $item)
             <option value="{{ $item->level_id }}">{{ $item->level_name }}</option>
        @endforeach --}}
    </select>
</div>
{{-- <div class="form-group col-sm-6">
    {!! Form::text('username', null, ['class' => 'form-control','id'=>'username','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}
@push('page_scripts')
<script type="text/javascript">
    $('#roll_no').on('change', function(e) {
             var rolll_no = e.target.value;
             $('#username').empty();
             $.get('dynamicstudent?roll_no=' + rolll_no, function(data) {
                 console.log(data);
                 $.each(data, function(index, lev) {
                     $('#username').append('<option value ="' + lev.email +
                         '">' + '</option>');
                     console.log(lev.level_id);
                 })
             });
         })

</script>
@endpush
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
