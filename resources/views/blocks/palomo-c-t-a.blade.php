<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  @if ($text && $url)
    <a href="{{ $url }}" class="btn btn-primary">
      {{ $text }}
      <x-go-chevron-right-16 />
    </a>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
