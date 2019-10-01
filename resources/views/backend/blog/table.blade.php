<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">{{ trans('sentence.blog.action') }}</td>
            <td>{{ trans('sentence.blog.title') }}</td>
            <td width="120">{{ trans('sentence.blog.author') }}</td>
            <td width="150">{{ trans('sentence.blog.category') }}</td>
            <td width="170">{{ trans('sentence.blog.date') }}</td>
        </tr>
    </thead>
    <tbody>
        <?php $request = request(); ?>

        @foreach($posts as $post)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.blog.destroy', $post->id]]) !!}
                        @if (check_user_permissions($request, "Blog@edit", $post->id))
                            <a href="{{ route('backend.blog.edit', $post->id) }}" class="btn btn-xs btn-default">
                                <i class="fa fa-edit"></i>
                            </a>
                        @else
                            <a href="#" class="btn btn-xs btn-default disabled">
                                <i class="fa fa-edit"></i>
                            </a>
                        @endif

                        @if (check_user_permissions($request, "Blog@destroy", $post->id))
                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        @else
                            <button type="button" onclick="return false;" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-trash"></i>
                            </button>
                        @endif
                    {!! Form::close() !!}
                </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author->name }}</td>
                <td>{{ $post->category->title }}</td>
                <td>
                    <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> |
                    {!! $post->publicationLabel() !!}
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
