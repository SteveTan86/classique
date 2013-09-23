@extends(theme_view('layout'))

@section('title')
	{{ site_title() }}
@stop

@section('url')
{{ Wardrobe::route('index') }}
@stop

@section('content')
    <article>
    	@foreach ($posts as $post)
    		@include(theme_view('inc.post'))
    	@endforeach
    </article>
    {{ $posts->links() }}
@stop
