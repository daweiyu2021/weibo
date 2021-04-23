<li class="media mt-4 mb-4">
    <a href="{{ route('users.show',$user->id) }}">
        <img src="" alt="{{ $user->name }}" class="img-thumbnail mr-3 gravatar">
    </a>
    <div class="media-body">
        <h5 class="mt-0 mb-1">
            {{ $user->name }}<small>/{{ $status->created_at->diffForHumans() }}</small>
        </h5>
        {{ $status->content }}
    </div>
    @can('destroy',$status)
    <form action="{{ route('statuses.destroy',$status->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-delete"></i>删除</button>
    </form>
    @endcan
</li>
