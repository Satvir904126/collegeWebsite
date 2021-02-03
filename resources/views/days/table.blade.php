<div class="table-responsive">
    <table class="table" id="days-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($days as $days)
                <tr>
                    <td>{{ $days->name }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['days.destroy', $days->days_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a data-toggle="modal" data-target="#view-day-modal" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            {{-- <a href="{{ route('days.show', [$days->days_id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('days.edit', [$days->days_id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                            'type' => 'submit',
                            'class' => 'btn
                            btn-danger btn-xs',
                            'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        @include('days.modal')

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
