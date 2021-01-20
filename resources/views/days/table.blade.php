<div class="table-responsive">
    <table class="table" id="days-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($days as $days)
            <tr>
                <td>{{ $days->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['days.destroy', $days->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('days.show', [$days->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('days.edit', [$days->id]) }}" class='btn btn-default btn-xs'>
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
