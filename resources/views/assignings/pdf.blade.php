<style>
    .align {
        text-align: center;
        border: 1px solid;
        padding: 10px;
    }

    th {
        text-align: center;
        /* background-color: #6c757d; */
        color: #6c757d;
        border: 1px solid;

        font-size: 30px;
    }

    td {


        font-size: 20px;
    }

    table {
        align-content: center;
    }

    .detail {
        color: #dc3545;
    }
</style>

<div class="table-responsive">
    <div>
        <h1 style="text-align:center;margin-top:20px;color:#dc3545">
            Assigned Classes For Teacher
        </h1>
    </div>
    <div>
        <table class="table" id="assignings-table">
            <thead class="thead-dark">
                <tr>
                    <th>Teacher</th>
                    <th>Course</th>
                    <th>Semester </th>
                    <th>Details</th>

                </tr>
            </thead>
            <tbody>

                @foreach($classAssigning as $assignings)
                <tr>
                    <td class="align col-md-3">{{ $assignings->first_name }}{{" "}}{{ $assignings->last_name }}</td>
                    <td class="align col-md-3">{{ $assignings->course_name }}</td>
                    <td class="align col-md-3">{{ $assignings->semester_name }}</td>
                    <td class="align col-md-3">
                        <span class="detail">Level:</span>{{ $assignings->level }}|{{ $assignings->class_name }}
                        <span class="detail">Day:</span>{{ $assignings->name }}|{{ $assignings->time}}
                        <span class="detail">Shift:</span>{{ $assignings->shift }}|{{ $assignings->batch }}
                        <span class="detail">Class:</span>{{ $assignings->classroom_name }}


                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
