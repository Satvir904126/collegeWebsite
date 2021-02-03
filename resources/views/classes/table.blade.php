<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <th>Class Name</th>
                <th>Class Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $classes)
                <tr>
                    <td>{{ $classes->class_name }}</td>
                    <td>{{ $classes->class_code }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['classes.destroy', $classes->class_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a data-toggle="modal" data-target="#view-class-modal" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>

                            {{-- <a
                                href="{{ route('classes.show', [$classes->class_id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('classes.edit', [$classes->class_id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                            'type' => 'submit',
                            'class' => 'btn
                            btn-danger btn-xs',
                            'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        @include('classes.modal')

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
