<ul class="tags">
    <li><span aria-hidden="true" class="icon-tags"></span></li>
    @if ($post->tags->count() <= 0)
        <li>
            <a href="#" class="rounded tiny alert button">
                No tags! GASP!
            </a>
        </li>
    @else
    	@foreach ($post->tags as $item)
    		@if ($item->tag != "")
    			<li>
                    <a href="{{ Wardrobe::route('posts.tags', $item->tag) }}" class="rounded tiny secondary button">
                        {{ $item->tag }}
                    </a>
                </li>
            @else
                <li>
                    <a href="#" class="rounded tiny alert button">
                        No tags! GASP!
                    </a>
                </li>
    		@endif
    	@endforeach
    @endif
</ul>
