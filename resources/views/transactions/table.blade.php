<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Fee Id</th>
        <th>User Id</th>
        <th>Paid Amount</th>
        <th>Transaction Date</th>
        <th>Remark</th>
        <th>Describtion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transactions)
            <tr>
                <td>{{ $transactions->student_id }}</td>
            <td>{{ $transactions->fee_id }}</td>
            <td>{{ $transactions->user_id }}</td>
            <td>{{ $transactions->paid_amount }}</td>
            <td>{{ $transactions->transaction_date }}</td>
            <td>{{ $transactions->remark }}</td>
            <td>{{ $transactions->describtion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['transactions.destroy', $transactions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transactions.show', [$transactions->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('transactions.edit', [$transactions->id]) }}" class='btn btn-default btn-xs'>
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
