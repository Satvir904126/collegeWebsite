<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>Blog Name</th>
                <th>Category</th>
                <th>Content</th>
                <th>User Id</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blogs)
            <tr>
                <td>{{ $blogs->blog_name }}</td>
                <td>{{ $blogs->category }}</td>
                <td>{{ $blogs->content }}</td>
                <td>{{ $blogs->student_id }}</td>
                <td><img src="{{asset('blog_image/'.$blogs->image) }}" alt="blogImg" srcset="" class="imgStyle"
                        width="120"> </td>
                <td width="120">
                    {!! Form::open(['route' => ['blogs.destroy', $blogs->blog_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('blogs.show', [$blogs->blog_id]) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('blogs.edit', [$blogs->blog_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a> --}}
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
