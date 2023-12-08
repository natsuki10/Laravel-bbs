@foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        @if($post->user_id === Auth::id())
            <a href="{{ route('posts.edit', $post->id) }}">編集</a>
            <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        @endif
        <form action="{{ route('post.like', $post->id) }}" method="post">
            @csrf
            @method('POST')
            <button type="submit" class="{{ $post->likes()->where('user_id', auth()->user()->id)->count() > 0 ? 'liked' : '' }}">
                ❤ {{ $post->likes()->count() }}
            </button>
        </form>
    </div>
@endforeach
