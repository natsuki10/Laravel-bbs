<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <label>タイトル</label>
    <input type="text" name="title" value="{{ $post->title }}" required><br>
    <label>コンテンツ</label>
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror
        @error('content')
        <p style="color:red">{{$message}}</p>
        @enderror
    <textarea name="content" required>{{ $post->content }}</textarea><br>
    <button type="submit">編集</button>
</form>
