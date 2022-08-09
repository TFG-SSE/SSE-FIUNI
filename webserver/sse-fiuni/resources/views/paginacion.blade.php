<?php $count = round($paginator->total()/$paginator->count());?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
    @for ($page = 1; $page <= $count; $page++)
        <li class="page-item <?= $paginator->currentPage() == $page ? 'active': ''; ?>"><a class="page-link" href="{{ $paginator->url($page) }}">{{ $page }}</a></li>
    @endfor
    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
  </ul>
</nav>
