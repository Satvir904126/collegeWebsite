<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
                <th>Roll No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Father Phone</th>
                <th>Mother Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Dob</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Current Address</th>
                <th>Nationality</th>
                <th>Passport</th>
                {{-- <th>Status</th> --}}
                <th>Dateregistered</th>
                {{-- <th>User Id</th> --}}
                <th>Course </th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admissions as $admission)
            <tr>
                <td>{{ $admission->roll_no }}</td>
                <td>{{ $admission->first_name }}</td>
                <td>{{ $admission->last_name }}</td>
                <td>{{ $admission->father_name }}</td>
                <td>{{ $admission->father_phone }}</td>
                <td>{{ $admission->mother_name }}</td>
                <td>{{ $admission->gender }}</td>
                <td>{{ $admission->email }}</td>
                <td>{{ $admission->dob }}</td>
                <td>{{ $admission->phone }}</td>
                <td>{{ $admission->address }}</td>
                <td>{{ $admission->current_address }}</td>
                <td>{{ $admission->nationality }}</td>
                <td>{{ $admission->passport }}</td>
                {{-- <td>{{ $admission->status }}</td> --}}
                <td>{{ $admission->dateregistered }}</td>
                {{-- <td>{{ $admission->user_id }}</td> --}}
                <td>{{ $admission->course_name }}</td>
                <td><img src="{{asset('student_image/'.$admission->image) }}" alt="studentImg" srcset=""
                        class="imgStyle" width="120"> </td>
                <td width="120">
                    {!! Form::open(['route' => ['admissions.destroy', $admission->student_id], 'method' => 'delete'])
                    !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admission->student_id]) }}"
                            class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admissions.edit', [$admission->student_id]) }}"
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
