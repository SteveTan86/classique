@extends(theme_view('layout'))

@section('title')
    {{-- @todo Get post object to pass us a SEO title --}}
    {{ "All About Steve | ".site_title() }}
@stop

@section('url')
{{ Wardrobe::route('about') }}
@stop

@section('content')
    <article class="paper">
        <header>
            <h2 class="title"><a href="#">All About Steve</a></h2>
        </header>
        <p>Steve Tan is a software developer from the tiny little city-state of Singapore. He graduated from the University of New South Wales in Sydney, Australia, with a BSc in Computer Science.</p>
        <p>Straight out of University, he landed his dream job at Accenture, and pioneered an automated software testing system which was deployed for a project at the Inland Revenue Authority of Singapore.</p>
        <p>Steve now runs his own software development studio called <a href="http://overturelabs.com">Overture Labs</a>, where he tinkers with new and exciting technologies, to help create value for his customers!</p>
    </article>
@stop
