<div class="col-sm-4 mb-3">
  <div class="card mt-3 ml-1 h-100">
    <div class="card-body d-flex flex-row">
        <div class="card-body pr-2 pt-2 pb-0 pl-2 text-center">
          <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
            <h4 class="card-title mb-0 w-100">
            {{ $article->title }}
            </h4>
            <div class="font-weight-lighter">
            {{ $article->published_at->format('Y/m/d') }}
            </div>
            <i class="i far fa-heart fa-lg pt-2 pb-2"></i>
            <div class="card-text">
              <div class="body card-text">
              {{ Str::limit($article->body, $limit=100, $end = ' ...more...') }}

              @foreach($article->tags as $tag)
              @if($loop->first)
              <div class="card-body p-1">
        <div class="card-text text-primary">
    @endif
    <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="p-1 mr-1 mt-1 text-muted">
            {{ $tag->hashtag }}
</a>
    @if($loop->last)
        </div>
      </div>
    @endif
  @endforeach
  </div>
        </div>
        </div>
        </a>

        @if( Auth::id() === $article->user_id )
    <!-- dropdown -->
      <div class="ml-auto card-text float-right">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button type="button" class="btn btn-link text-muted m-0 p-0">
              <i class="fas fa-ellipsis-v"></i>
            </button>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
              <i class="fas fa-pen mr-1"></i>記事を更新する
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
              <i class="fas fa-trash-alt mr-1"></i>記事を削除する
            </a>
          </div>
        </div>
      </div>
          <!-- dropdown -->
  
          <!-- modal -->
          <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    {{ $article->title }}を削除します。よろしいですか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- modal -->
        @endif
        
        </div>
  </div>
  </div>