@unless ($block->preview)
  <div {{ $attributes }}>
@endunless

@if ($image)
  <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" />
@endif
@if ($title)
  <span>{!! $title !!}</span>
@endif
@if ($subtitle)
  <p>{!! $subtitle !!}</p>
@endif
@if ($page_link)
  <a href="{!! $page_link !!}">OK</a>
@endif


<div>
  <InnerBlocks template="{{ $block->template }}" />
</div>

@unless ($block->preview)
  </div>
@endunless
