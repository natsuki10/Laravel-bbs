<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label>タイトル</label>
    <input type="text" name="title" required><br>
    <label>コンテンツ</label>
    <textarea name="content" required></textarea><br>
    @error('title')
        <p style="color:red">{{ $message }}</p>
    @enderror
    @error('content')
     <p style="color:red">{{$message}}</p>
     @enderror
    <button type="submit">投稿</button>
</form>
