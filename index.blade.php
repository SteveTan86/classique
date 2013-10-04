@extends(theme_view('layout'))

@section('title')
	{{ site_title() }}
@stop

@section('url')
{{ Wardrobe::route('index') }}
@stop

@section('content')
    <article>
        <header>
            <h2 class="title">Recently...</h2>
        </header>
        <section class="paper">
            <ul class="archive">
                @foreach (Wardrobe::posts(array('per_page' => 10)) as $post)
                <li>
                  <span><i class="icon-calendar">&nbsp;</i>{{ date("M d, Y", strtotime($post['publish_date'])) }}</span> - <strong><a href="{{ wardrobe_url('/post/'.$post['slug']) }}">{{ $post['title'] }}</a></strong>
                </li>
                @endforeach
            </ul>
        </section>
    </article>
@stop
