<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
          {{ $article->title }}
          </h3>
        <div class="font-weight-lighter">
          {{ $article->created_at->format('Y/m/d') }}
        </div>
        </div>
        <div class="card-text">
          {{ $article->body }}
        </div>
    </div>
  </div>
</div>