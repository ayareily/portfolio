<div class="col-sm-4">
  <div class="card mt-3 ml-1 h-100">
    <div class="card-body d-flex flex-row">
        <div class="card-body pr-2.5 pt-2 pb-0">
          <h4 class="card-title w-100">
          <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
          {{ $article->title }}
          </a>
          </h4>
        <div class="font-weight-lighter">
          {{ $article->published_at->format('Y/m/d') }}
        </div>
        <div class="card-text">
          <div class="body">
            {{ Str::limit($article->body, $limit=150, $end = '...') }}
          </div>
        </div>
        </div>


        @if( Auth::id() === $article->user_id )
    <!-- dropdown -->
      <div class="h4 card-title flex-shrink-1">
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

          <!-- modal -->
        @endif
        </div>
  </div>
  </div>