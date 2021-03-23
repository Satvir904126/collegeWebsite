{{-- <!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Schedule Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_schedule_id', 'Class Schedule Id:') !!}
    {!! Form::number('class_schedule_id', null, ['class' => 'form-control']) !!}
</div> --}}



<div class='input-group col-md-l2 input_Fields_wrap'>
    <input type='hidden' name='class_assign_id' id="">

    <select name='teacher_id' id="teacher_id" c1ass='Form-control' style="width:50%; margin-top:10px; float:right">
        <option value="" selected="true" disabled:"true">Select Teacher </option>
        @Foreach ($teacher as $teach)
        <option value="{{$teach->techer_id}}">
            {{$teach->techer_id}}
            {{$teach->first_name}}
            {{$teach->last_name}}
        </option>
        @endforeach
    </select>

    <div class="clearfix">
    </div>
