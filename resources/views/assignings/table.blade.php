{{-- model --}}
<div class="  ">
    <div class=" modal fade" id="assign-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog     modal-dialog-centere modal-xl " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Assigning</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(['route' => ['assignClass'], 'method' => 'post']) !!}
                @csrf
                @include('assignings.fields')
                <div class="table-responsive">
                    <table class="table" id="assignings-table">
                        <thead>
                            {{-- <tr>
                <th>Teacher Id</th>
        <th>Class Schedule Id</th>
                <th colspan="3">Action</th>
            </tr> --}}
                        </thead>
                        <tbody>
                            @foreach ($classSchedule as $schedule)
                            {{-- {{dd($schedule->scedule_id)}} --}}
                            <tr>
                                <td><input type="checkbox" name="multiclass[]" value="{{$schedule->scedule_id}}">
                                </td>
                                <td>{{$schedule->course_name}} </td>
                                <td>{{$schedule->class_name}} </td>
                                <td>{{$schedule->course_name}} </td>
                                <td>{{$schedule->level}} </td>
                                <td>{{$schedule->shift}} </td>
                                <td>{{$schedule->classroom_name}} </td>
                                <td>{{$schedule->batch}} </td>
                                <td>{{$schedule->name}} </td>
                                <td>{{$schedule->time}} </td>
                                <td>{{$schedule->smester_name}} </td>
                                <td>{{date('m/d/Y',strtotime($schedule->start_date))}} </td>
                                <td>{{date('m/d/Y',strtotime($schedule->end_date))}} </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" value="">Genrate</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table" id="assignings-table">
        <thead>
            <tr>
                <th>Teacher</th>
                <th>Course</th>
                <th>Semester </th>
                <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($classAssigning as $assignings)
            <tr>
                <td>{{ $assignings->first_name }}{{" "}}{{ $assignings->last_name }}</td>
                <td>{{ $assignings->course_name }}</td>
                <td>{{ $assignings->semester_name }}</td>
                <td>{{ $assignings->time}}|
                    {{ $assignings->name }}|
                    {{ $assignings->shift }}|
                    {{ $assignings->level }}|
                    {{ $assignings->class_name }}|
                    {{ $assignings->batch }}|
                    {{ $assignings->classroom_name }}


                </td>
                <td width="120">
                    {!! Form::open(['route' => ['assignings.delete', $assignings->class_assign_id], 'method' =>
                    'get']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('assignings.show', [$assignings->class_assign_id]) }}" class='btn
                        btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                        </a> --}}
                        {{-- <a href="{{ route('assignings.edit', $assignings->class_assign_id) }}" class='btn
                        btn-default
                        btn-xs'>
                        <i class="far fa-edit"></i>
                        </a> --}}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit',
                        'class' => 'btn
                        btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>




                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$classAssigning->links()}}
</div>
