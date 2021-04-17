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

    <select class="form-control" name="username" id="userName">
        <option value="">Select UserName</option>
        {{-- @foreach ($levels as $item)
        <option value="{{ $item->level_id }}">{{ $item->level_name }}</option>
        @endforeach --}}
    </select>
</div>
{{-- <div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control','id'=>'username','maxlength' => 255,'maxlength' => 255])
    !!}
</div> --}}
@push('page_scripts')
<script type="text/javascript">
    $('#roll_no').on('change', function(e) {

             var student_id = e.target.value;

             $('#userName').empty();
//              $.get('dynamicstudent?id='+student_id,function(data){
// console.log("id is here",data);
//              });
          $.get('dynamicstudent?id='+student_id,function(data){
 console.log("id is here",data);

                 $.each(data, function(index, lev) {
                     console.log("level",lev.email)
                     $('#userName').append('<option value ="' + lev.email +
                                             '">' +
                                             lev.email + '</option>');
                    //  $('#userName').append('<option value ="' + lev.email +
                    //      '">' + '</option>');
                 });
               });
          });

    //       $('#roll_no').change(function(e){
    // e.preventDefault();
    // $.ajax({
    //     url: '{{url("dynamicstudent")}}',
    //     data: $(id:e.target.value).serialize(),
    //     type: "GET",
    //     headers: {
    //         'X-CSRF-Token': '{{ csrf_token() }}',
    //     },
    //     success: function(data){
    //         alert("okay");

    //     },
    //     error: function(){
    //           alert("failure From php side!!! ");
    //      }

    //     });

    //     });

</script>
@endpush


<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
{{--
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
@endpush --}}

<!-- Logout Time Field -->
{{-- <div class="form-group col-sm-6">
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
@endpush --}}
