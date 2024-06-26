<div class="{{ $block->classes }} hero-buttons" style="{{ $block->inlineStyle }}">
  @if ($text && $url)
    <a href="{{ $url }}" class="btn btn-primary bounce-animated">
      {{ $text }}
      <x-go-chevron-right-16 />
    </a>
    @if ($partner)
    {!! wp_get_attachment_image($partner, 'partner_image', false, ['loading' => 'lazy']) !!}
    @endif
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
