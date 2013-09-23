<div class="pagination-centered">
    <ul class="pagination">
        @if ($paginator->getCurrentPage() <= 1)
            <li class="arrow unavailable"><a href="">&laquo;</a></li>
        @else
            <li class="arrow"><a href="<?= $paginator->getUrl($paginator->getCurrentPage() - 1) ?>">&laquo;</a></li>
        @endif

        @if ($paginator->getLastPage() < 10)
            @for ($page = 1; $page <= $paginator->getLastPage(); $page++)
                @if ($paginator->getCurrentPage() == $page)
                    <li class="current"><a href="">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $paginator->getUrl($page) }}">{{ $page }}</a></li>
                @endif
            @endfor
        @else
            @if ((($paginator->getLastPage() - 3) < $paginator->getCurrentPage()) or ($paginator->getCurrentPage() < 4))
                {{-- << 1 X 3 ... 8 9 10 >> --}}
                @for ($page = 1; $page <= 3; $page++)
                    @if ($paginator->getCurrentPage() == $page)
                        <li class="current"><a href="">{{ $page }}</a></li>
                        @if ($page == 3)
                            <li><a href="{{ $paginator->getUrl($page + 1) }}">{{ $page + 1 }}</a></li>
                        @endif
                    @else
                        <li><a href="{{ $paginator->getUrl($page) }}">{{ $page }}</a></li>
                    @endif
                @endfor
                <li class="unavailable"><a href="">&hellip;</a></li>
                @for ($page = ($paginator->getLastPage() - 2); $page <= $paginator->getLastPage(); $page++)
                    @if ($paginator->getCurrentPage() == $page)
                        @if ($page == ($paginator->getLastPage() - 2))
                            <li><a href="{{ $paginator->getUrl($page - 1) }}">{{ $page - 1 }}</a></li>
                        @endif
                        <li class="current"><a href="">{{ $page }}</a></li>

                    @else
                        <li><a href="{{ $paginator->getUrl($page) }}">{{ $page }}</a></li>
                    @endif
                @endfor
            @else
                {{-- << 1 2 3 ... 5 X 6 ... 8 9 10 >> --}}
                @for ($page = 1; $page <= 2; $page++)
                    <li><a href="{{ $paginator->getUrl($page) }}">{{ $page }}</a></li>
                @endfor
                <li class="unavailable"><a href="">&hellip;</a></li>

                @for ($page = ($paginator->getCurrentPage() - 1); $page <= $paginator->getCurrentPage() + 1; $page++)
                    @if ($paginator->getCurrentPage() == $page)
                        <li class="current"><a href="">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $paginator->getUrl($page) }}">{{ $page }}</a></li>
                    @endif
                @endfor

                <li class="unavailable"><a href="">&hellip;</a></li>
                @for ($page = ($paginator->getLastPage() - 1); $page <= $paginator->getLastPage(); $page++)
                    <li><a href="{{ $paginator->getUrl($page) }}">{{ $page }}</a></li>
                @endfor
            @endif
        @endif

        @if ($paginator->getCurrentPage() >= $paginator->getLastPage())
            <li class="arrow unavailable"><a href="">&raquo;</a></li>
        @else
            <li class="arrow"><a href="<?= $paginator->getUrl($paginator->getCurrentPage() + 1) ?>">&raquo;</a></li>
        @endif
    </ul>
</div>
