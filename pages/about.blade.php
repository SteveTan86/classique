@extends(theme_view('layout'))

@section('title')
    {{-- @todo Get post object to pass us a SEO title --}}
    {{ "All About Steve | ".site_title() }}
@stop

@section('content')
    <article class="paper">
        <header>
            <h2 class="title"><a href="#">All About Steve</a></h2>
        </header>
        {{-- @todo --}}
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolore alias atque molestiae quidem distinctio vitae magnam nemo! Possimus, labore doloremque repellat earum asperiores temporibus tempore! Explicabo, voluptatem placeat saepe.</p>
    </article>
@stop
