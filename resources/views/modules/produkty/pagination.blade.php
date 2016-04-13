<div class="paging clearfix">
  @if($payload->currentPage() > 1)
  <a class="btn btn-outline pull-left" href="{{$payload->previousPageUrl()}}">
    <i class="icon-arrow-left2 right"></i><span>{{ trans('ui.pagination.previous') }}</span><span class="hidden-xs"> {{ trans('ui.pagination.page') }}</span>
  </a>
  @endif
  @if($payload->hasMorePages())
  <a class="btn btn-outline pull-right" href="{{$payload->nextPageUrl()}}">
    <span>{{ trans('ui.pagination.next') }}</span><span class="hidden-xs"> {{ trans('ui.pagination.page') }}</span><i class="icon-arrow-right2 right"></i>
  </a> 
  @endif
</div>
