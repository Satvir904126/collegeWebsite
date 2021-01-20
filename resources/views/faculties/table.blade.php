<div class="table-responsive">
    <table class="table" id="faculties-table">
        <thead>
            <tr>
                <th>Faculty Name</th>
        <th>Faculty Code</th>
        <th>Faculty Description</th>
        <th>Faculty Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculties)
            <tr>
                <td>{{ $faculties->faculty_name }}</td>
            <td>{{ $faculties->faculty_code }}</td>
            <td>{{ $faculties->faculty_description }}</td>
            <td>{{ $faculties->faculty_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faculties.destroy', $faculties->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faculties.show', [$faculties->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faculties.edit', [$faculties->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
