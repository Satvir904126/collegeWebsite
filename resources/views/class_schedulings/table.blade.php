<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course</th>
                <th>Level</th>
                <th>Shift</th>
                <th>Classroom</th>
                <th>Batch</th>
                <th>Day </th>
                <th>Time </th>
                {{-- <th>Teacher Id</th> --}}
                <th>Semester </th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classSchedule as $classScheduling)
            <tr>
                <td>{{ $classScheduling->course_name }}</td>
                <td>{{ $classScheduling->level }}</td>
                <td>{{ $classScheduling->shift }}</td>
                <td>{{ $classScheduling->classroom_name }}</td>
                <td>{{ $classScheduling->batch }}</td>
                <td>{{ $classScheduling->name }}</td>
                <td>{{ $classScheduling->time }}</td>
                {{-- <td>{{ $classScheduling->teacher_id }}</td>
                --}}

                <td>{{ $classScheduling->semester_name }}</td>

                <td>{{ $classScheduling->start_date }}</td>

                <td>{{ $classScheduling->end_date }}</td>

                <td>
                    @if ($classScheduling->status == 1)
                    <div class="bg-success text-center"> Active</div>
                    @else
                    <div class="bg-danger text-center"> In Active</div>
                </td>
                @endif
                <td width="120">
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->scedule_id], 'method' =>
                    'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a
                        href="{{ route('classSchedulings.show', [$classScheduling->scedule_id]) }}"
                        class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('classSchedulings.edit', [$classScheduling->scedule_id]) }}"
                            class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a> --}}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', [
                        'type' => 'submit',
                        'class' => 'btn
                        btn-danger btn-xs',
                        'onclick' => "return confirm('Are you sure?')",
                        ]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
