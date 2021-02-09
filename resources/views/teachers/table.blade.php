<style>
    .imgStyle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
    }
</style>
<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Dob</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>Passport</th>
                <th>Status</th>
                <th>Dateregistered</th>
                <th>User Id</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teachers)
            <tr>
                <td>{{ $teachers->first_name }}</td>
                <td>{{ $teachers->last_name }}</td>
                <td> @if ($teachers->gender == 0)
                    <span>Male </span>
                    @else
                    <span>Female </span>
                    @endif
                    {{-- {{ $teachers->gender }} --}}
                </td>
                <td>{{ $teachers->email }}</td>
                <td>{{ $teachers->dob }}</td>
                <td>{{ $teachers->phone }}</td>
                <td>{{ $teachers->address }}</td>
                <td>{{ $teachers->nationality }}</td>
                <td>{{ $teachers->passport }}</td>
                <td>@if ($teachers->status == 0)
                    <span>Single </span>
                    @else
                    <span>Married </span>
                    @endif
                    {{-- {{ $teachers->status }} --}}
                </td>
                <td>{{ $teachers->dateregistered }}</td>
                <td>{{ $teachers->user_id }}</td>
                <td> <img src="{{asset('teacher_image/'.$teachers->image) }}" alt="" srcset="" class="imgStyle"> </td>
                <td width="120">
                    {!! Form::open(['route' => ['teachers.destroy', $teachers->techer_id], 'method' => 'delete'])
                    !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teachers->techer_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teachers.edit', [$teachers->techer_id]) }}" class='btn btn-default btn-xs'>
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
