<div class="col-12 mt-4">
    <div class="d-md-flex align-items-center text-center justify-content-between">
                        <span class="text-muted me-3">
                                نمایش {{ $pagination->firstItem() }} - {{ $pagination->lastItem() }} از {{ $pagination->total() }}
                        </span>
        <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
            @if($pagination->onFirstPage())
                <li class="page-item disabled"><a class="page-link" disabled aria-label="Previous">قبلی</a>
            @else
                <li class="page-item"><a class="page-link" href="{{$pagination->previousPageUrl()}}" aria-label="Previous">قبلی</a></li>
            @endif

            <li class="page-item active"><a class="page-link" href="javascript:void(0)">{{$pagination->currentPage()}}</a></li>

            @if(!$pagination->hasMorePages())
                <li class="page-item disabled"><a class="page-link" disabled aria-label="Next">بعدی</a>
            @else
                <li class="page-item"><a class="page-link" href="{{$pagination->nextPageUrl()}}" aria-label="Next">بعدی</a></li>
            @endif

        </ul>
    </div>
</div>
