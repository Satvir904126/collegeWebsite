{{-- <div class="table-responsive">
    <table class="table" id="attendances-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Class Id</th>
        <th>Subject Id</th>
        <th>Teacher Id</th>
        <th>Attendance Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->student_id }}</td>
<td>{{ $attendance->class_id }}</td>
<td>{{ $attendance->subject_id }}</td>
<td>{{ $attendance->teacher_id }}</td>
<td>{{ $attendance->attendance_status }}</td>
<td width="120">
    {!! Form::open(['route' => ['attendances.destroy', $attendance->id], 'method' => 'delete']) !!}
    <div class='btn-group'>
        <a href="{{ route('attendances.show', [$attendance->id]) }}" class='btn btn-default btn-xs'>
            <i class="far fa-eye"></i>
        </a>
        <a href="{{ route('attendances.edit', [$attendance->id]) }}" class='btn btn-default btn-xs'>
            <i class="far fa-edit"></i>
        </a>
        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"]) !!}
    </div>
    {!! Form::close() !!}
</td>
</tr>
@endforeach
</tbody>
</table>
</div> --}}
<style>
    .style {
        border: none;
        outline: none;
    }
</style>
<div class="table-responsive">
    <table class="table" id="edit_table">
        <thead>
            <tr>
                <th>Roll No</th>
                <th>Student Name</th>
                <th>Attendance</th>
                <th>Grades</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendance as $key =>$attendance)
            <tr>
                <form action={{ route('attandance.grades', [$attendance->student_id]) }} method="get">
                    <input type="hidden" class="style" name="course_id" id="course_id"
                        value="{{ $attendance->course_id }}" readonly>

                    <td><input type="text" class="style" name="roll_no" id="roll_no" value="{{ $attendance->roll_no }}"
                            readonly>
                    </td>
                    <td><input type="text" class="style" name="name" id="name"
                            value={{ $attendance->first_name }}{{" "}}{{ $attendance->last_name }} readonly>
                    </td>
                    <td> <input type="number" name="attendance" class='attendanceClass style'
                            id={{"attendance".$attendance->student_id}} placeholder="0 %" readonly
                            value={{ $attendance->attendance}} max="100">
                    </td>
                    <td> <input type="number" class="gradeClass style" name="grades"
                            id={{"grades".$attendance->student_id}} placeholder="0 %" readonly
                            value={{ $attendance->grades}} max="100"></td>
                    <td>
                        {{-- {{dd('edit_grades'.$attendance->student_id)}}; --}}
                        <button type="button" class='edit_attendance' id={{$attendance->student_id}}>Edit
                            Attendance</button>
                        <button type="button" class='edit_grades' id={{$attendance->student_id}}>Edit
                            Grades</button>
                        {{-- <a href="{{ route('attandance.index', [$attendance->student_id]) }}" class='save'
                        id={{"save".$attendance->student_id}} style="display: none;">
                        Save
                        </a> --}}
                        <button type="submit" class='save' id={{"save".$attendance->student_id}}
                            style="display: none;">Save</button>
                        <button type="submit" class='cancle' id={{"cancle".$attendance->student_id}}
                            style="display: none;">Cancle</button>

                        {{-- {!! Form::button('Edit', ['type' => 'submit', 'class' => ' btn btn-primary
                    btn-xs',]) !!} --}}
                    </td>
                    {{-- <td>{{ $attendance->subject_id }}</td>
                    <td>{{ $attendance->teacher_id }}</td>
                    <td>{{ $attendance->attendance_status }}</td> --}}
                    {{-- <td width="120">
                    {!! Form::open(['route' => ['attendances.destroy', $attendance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendance->id]) }}" class='btn btn-default btn-xs'>
                    <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('attendances.edit', [$attendance->id]) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                    </a>

</div>
{!! Form::close() !!} --}}
{{-- </td> --}}
</form>

</tr>
@endforeach
</tbody>
</table>
</div>
@push('page_scripts')
<script type="text/javascript">
    $(document).ready(function(){

       $('.edit_grades').click(function(e){
            $("#grades"+this.id).prop('readonly', false);
            $("#grades"+this.id).css({"background": "#007BFF"});
            $('.edit_grades').hide();
            $('.edit_attendance').hide();
            $('#save'+this.id).css({"display": "block"});
            $('#cancle'+this.id).css({"display": "block"});



       });
       $('.edit_attendance').click(function(e){
            $("#attendance"+this.id).prop('readonly', false);
            // $("#"+this.id).css({"color": "#dc3545"});
            $("#attendance"+this.id).attr('style', "background: #007BFF");
            $('.edit_grades').hide();
            $('.edit_attendance').hide();
            $('#save'+this.id).css({"display": "block"});
            $('#cancle'+this.id).css({"display": "block"});


       });
       $('.save').click(function(e){
        $('.edit_grades').show();
            $('.edit_attendance').show();
            $('.save').css({"display": "none"});
            $('.cancle').css({"display": "none"});

            $(".style").css({"background": "#FFFFFF"});
       });
       $('.cancle').click(function(e){
        $('.edit_grades').show();
            $('.edit_attendance').show();
            $('.save').css({"display": "none"});
            $('.cancle').css({"display": "none"});
            $(".style").css({"background": "#FFFFFF"});
       });






});
</script>
@endpush
