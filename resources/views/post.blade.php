@extends('master')

@section('header-intro')
    <div class="post-header p-6 rounded-lg shadow-md mb-6">
        <img src="{{ $post->thumb }}" class="rounded-md mb-4 mx-auto" alt="Thumbnail do post" />
        <h2 class="post-title text-5xl font-semibold text-gray-800 mb-4 text-center">{{ $post->title }}</h2>
        <p class="post-author text-2xl text-gray-700 text-center">
            <i class="fas fa-user mr-2"></i> {{ $post->user->fullname }}
            | <i class="fas fa-comments ml-4 mr-2"></i> {{ $post->comments->count() }} comentários
        </p>
    </div>
@endsection


@section('main')
<div id="content-post" class="px-4 py-2 mb-6 bg-white shadow-sm rounded-lg mb-lg-5">
    <p class="post-content text-xl text-gray-800 leading-relaxed">{{ $post->content }}</p>
</div>

    <hr class="divider">

    @if (auth()->check())

        @if (session()->has('error_create_comment'))
            <div class="alert alert-danger">{{ session()->get('error_create_comment') }}</div>
        @endif

        <div class="comment-form">
            {{-- Exibe o primeiro erro de validação relacionado ao campo "comment" --}}
            @if ($errors->has('comment'))
                <div class="alert alert-warning">{{ $errors->first('comment') }}</div>
            @endif

            <form action="{{ route('comment', $post->id) }}" method="post" class="form-group">
                @csrf
                <textarea name="comment" cols="30" rows="4" class="form-control" placeholder="Digite seu comentário aqui"></textarea> <br>
                <button type="submit" class="btn btn-primary mb-5">Comentar</button>
            </form>
        </div>
    @endif

    <h3 class="mt-lg-5 mb-3">Comentários</h2>
    <ul id="comments" class="list-unstyled">
        @forelse ($post->comments as $comment)
            <li class="comment-item card mb-3 shadow-sm p-3 bg-white rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <span class="comment-author font-weight-bold">{{ $comment->user->fullName }}</span>
                            <small class="text-muted"> - {{ $comment->created_at->format('d M Y, H:i') }}</small>
                        </div>
                        @if (auth()->check() && auth()->user()->id === $comment->user->id)
                            <a href="{{ route('comment.destroy', $comment->id) }}" class="text-danger delete-link" title="Deletar comentário">
                                <i class="fas fa-trash-alt"></i> Deletar
                            </a>
                        @endif
                    </div>
                    <p class="comment-text">{{ $comment->comment }}</p>
                </div>
            </li>
        @empty
            <li class="no-comments alert alert-info text-center">Nenhum comentário para esse post</li>
        @endforelse
    </ul>

@endsection
