@extends(theme_view('layout'))

@section('title')
    {{-- @todo Get post object to pass us a SEO title --}}
	{{ $post->title." | ".site_title() }}
@stop

@section('url')
{{ Wardrobe::route('posts.show',$post->slug) }}
@stop

@section('content')
    <article>
        <section class="paper">
            <header>
                <h2 class="title">{{ $post->title }}</h2>
                <p class="date">by {{ $post->user->first_name.' '.$post->user->last_name.' on '.date("M/d/Y", strtotime($post->publish_date)) }}</p>
            </header>

            {{ $post->parsed_content }}

        </section>
        <footer>
            @include(theme_view('inc.tags'))
        </footer>
        <section class="comments">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                var disqus_shortname = 'codingwithsteve';
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        </section>
    </article>
@stop

