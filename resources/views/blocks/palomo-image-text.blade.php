<div class="{{ $block->classes }} img-txt page-width" style="{{ $block->inlineStyle }}">
  @if($title_txt)
    <h2 class="img-txt__title">{!! $title_txt !!}</h2>
  @endif
  @if ($items)
    <div class="img-txt__container">
      @foreach ($items as $item)
      @if($item['is_reversed'])
        <div class="img-txt__item first">
      @else
        <div class="img-txt__item">
      @endif
          {!! wp_get_attachment_image( $item['image'], 'img-txt__image', false, ['loading' => 'lazy'] ) !!}
          @if($item['is_reversed'])
            <div class="img-txt__info first">
          @else
            <div class="img-txt__info">
          @endif
            {!! wp_get_attachment_image( $item['logo_image'], 'img-txt__logo', false, ['loading' => 'lazy'] ) !!}
            <h3 class="img-txt__info-title">{!! $item['title'] !!}</h3>
            <p class="img-txt__desc">{!! $item['content'] !!}</p>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
