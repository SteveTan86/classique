@extends(theme_view('layout'))

@section('title')
	Post Preview
@stop

@section('content')
	<article>
        <section class="paper">
            <header>
				<h2 class="title"></h2>
			</header>

			<div class="js-content"></div>

		</section>

	</section>
@stop

@section('js')
	@parent
	<script src="//cdnjs.cloudflare.com/ajax/libs/jStorage/0.3.0/jstorage.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/marked/0.2.9/marked.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var initial = $.jStorage.get("post-{{ $id }}");
			$(".title").html(initial.title);
			$(".js-content").html(marked(initial.content));

			$.jStorage.subscribe("post-{{ $id }}", function(channel, data){
				$(".title").html(data.title);
				$(".js-content").html(marked(data.content));
			});
		});
	</script>
@stop
