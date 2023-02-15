<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿編集</title>
</head>

<main>
  <article>
    <div>
      <h1>投稿編集</h1>

      @if ($errors->any())
        <div>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div>
        <a href="{{ route('posts.index') }}">&lt; 戻る</a>
      </div>

      <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('patch')
        <div>
          <label for="title">タイトル</label>
          <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
          <label for="content">本文</label>
          <textarea name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit">更新</button>
      </form>
    </div>
  </article>
</main>

<footer>
  <p>&copy; 投稿アプリ All rights reserved.</p>
</footer>
</html>