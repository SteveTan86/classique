@extends(theme_view('layout'))

@section('title')
  {{-- @todo Get post object to pass us a SEO title --}}
    {{ "404 | ".site_title() }}
@stop

@section('url')
{{ Wardrobe::route('index') }}
@stop

@section('content')
    <article class="paper">
        <header>
            <h2 class="title"><a href="#">404, Hic Sunt Dracones</a></h2>
        </header>
        <p>You have reached the dark recesses of this website. Turn back now, or forever be lost to the web of darkness.</p>
        <p>You have been warned, traveller.</p>
    </article>
@stop

