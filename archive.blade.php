@extends(theme_view('layout'))

@section('title')
    {{-- @todo Get post object to pass us a SEO title --}}
    {{ "Archives | ".site_title() }}
@stop

@section('content')
    <article>
        <header>
            {{-- Archive Heading --}}
            {{-- Notice the triple brackets to escape any xss for tags and search term. --}}
            @if (isset($tag))
                <h2 class="title">{{{ ucfirst($tag) }}} Archives</h2>
            @elseif ($search)
                <h2 class="title">Results for {{{ $search }}}</h2>
            @else
                <h2 class="title">Archives</h2>
            @endif
        </header>

        @foreach ($posts as $post)
            @include(theme_view('inc.post'))
        @endforeach
    </article>
    {{ $posts->links() }}
@stop
