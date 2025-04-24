@unless ($block->preview)
  <div {{ $attributes }}>
@endunless

<div class="flex justify-center mt-8">
  <div class="w-210 border border-solid border-white rounded-lg px-25 py-43.5 relative flex flex-col justify-center items-center">
    @svg('logo', 'h-33 w-auto absolute -top-8 -left-6.5')
    @if ($image)
      <img class="w-32.5 h-auto" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" />
    @endif
    @if ($title)
      <span class="h1-title mt-6">{!! $title !!}</span>
    @endif
    @if ($subtitle)
      <p class="text-center mt-4">{!! $subtitle !!}</p>
    @endif
    @if ($page_link)
      <a class="absolute flex justify-center items-center w-65 h-15 bg-secondary font-secondary text-base font-bold text-white -bottom-5 !no-underline
          before:w-[90%] before:h-[120%] before:bg-secondary/40 before:absolute before:-top-[10%] before:left-[5%] before:-z-10 before:rotate-5" href="{!! $page_link !!}">OK</a>
    @endif
  </div>
</div>


<div>
  <InnerBlocks template="{{ $block->template }}" />
</div>

@unless ($block->preview)
  </div>
@endunless
