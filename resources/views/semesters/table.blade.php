<div class="table-responsive">
    <table class="table" id="semesters-table">
        <thead>
            <tr>
                <th>Semester Name</th>
                <th>Semester Code</th>
                <th>Semester Duration</th>
                <th>Semester Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($semesters as $semester)
                <tr>
                    <td>{{ $semester->semester_name }}</td>
                    <td>{{ $semester->semester_code }}</td>
                    <td>{{ $semester->semester_duration }}</td>
                    <td>{{ $semester->semester_description }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['semesters.destroy', $semester->semester_id], 'method' => 'delete'])
                        !!}
                        <div class='btn-group'>
                            <a href="{{ route('semesters.show', [$semester->semester_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('semesters.edit', [$semester->semester_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
