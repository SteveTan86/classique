<article class="paper">
    <header>
        <h3 class="title">
            <a href="{{ Wardrobe::route('posts.show', $post->slug) }}">
                {{ $post->title }}
            </a>
        </h3>
        <p class="date">
            by {{ $post->user->first_name.' '.$post->user->last_name.' on '.date("M/d/Y", strtotime($post->publish_date)) }}
        </p>
    </header>
    {{ $post->parsed_intro }}
</article>
