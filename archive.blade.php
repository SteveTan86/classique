@extends(theme_view('layout'))

@section('title')
    {{-- @todo Get post object to pass us a SEO title --}}
    {{ "Archives | ".site_title() }}
@stop

@section('url')
{{ Wardrobe::route('posts.archive') }}
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
        <section class="paper">
            <ul class="archive">
              @foreach ($posts as $post)
                <li>
                  <span><i class="icon-calendar">&nbsp;</i>{{ date("M d, Y", strtotime($post['publish_date'])) }}</span> - <strong><a href="{{ wardrobe_url('/post/'.$post['slug']) }}">{{ $post['title'] }}</a></strong>
                </li>
              @endforeach
            </ul>
        </section>
    </article>
    {{ $posts->links() }}
@stop
