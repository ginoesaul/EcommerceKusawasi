@php
    if (isset($approved) and $approved == true) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp

@if($comments->count() < 1)
    <div class="alert alert-warning">Todavía no hay comentarios.</div>
@endif

<div class="row">
  <div class="col-sm-6">
      @auth
          @include('comments::_form')
      @elseif(config('comments.guest_commenting') == true)
          @include('comments::_form', [
              'guest_commenting' => false
          ])
      @else
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Autenticacion requerida</h5>
                  <p class="card-text">Debes iniciar sesión para publicar un comentario.</p>
                  <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
              </div>
          </div>
      @endauth
  </div>
    <div class="col-sm-6">
        <ul class="list-unstyled">
            @php
                $grouped_comments = $comments->sortBy('created_at')->groupBy('child_id');
            @endphp
            @foreach($grouped_comments as $comment_id => $comments)
                {{-- Process parent nodes --}}
                @if($comment_id == '')
                    @foreach($comments as $comment)
                        @include('comments::_comment', [
                            'comment' => $comment,
                            'grouped_comments' => $grouped_comments
                        ])
                    @endforeach
                @endif
            @endforeach
        </ul>
    </div>
</div>




