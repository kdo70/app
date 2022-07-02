@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li><a class="pagination-prev disabled" rel="prev"></a></li>
        @else
            <li><a class="pagination-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"></a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-active">{{ $page }}</li>
                    @else
                        <li class="pagination"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li><a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next"></a></li>
        @else
            <li><a class="pagination-next disabled" rel="next"></a></li>
        @endif
    </ul>
@endif
