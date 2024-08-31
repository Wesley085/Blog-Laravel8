@component('mail::message')
# Novo Comentário no Seu Post

Olá {{ $post->user->fullname }},

O usuário {{ $user->fullName }} comentou em seu post <b> {{ $post->title}} </b>. Você pode visualizar o comentário clicando no botão abaixo.

@component('mail::button', ['url' => $url])
Ver Comentário
@endcomponent

Obrigado,<br>
Wesley
@endcomponent
