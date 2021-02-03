<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($batches as $batche)
                <tr>
                    <td>{{ $batche->batch }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['batches.destroy', $batche->batch_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('batches.show', [$batche->batch_id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('batches.edit', [$batche->batch_id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
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
