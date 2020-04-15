@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->title ?? old('body') }}</textarea>

<div class="md-form">
<label></label>
<input type="date" value="{{ $article->published_at ?? date('Y-m-d') }}"　name="published_at" class="form-control" placeholder="投稿日">
</div>
</div>