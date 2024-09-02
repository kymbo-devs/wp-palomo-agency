<section class="{{ $block->classes }} text-icons page-width" style="{{ $block->inlineStyle }}">
  <div class="text-icons__blocks">
    {!! wp_get_attachment_image($img1, 'text-icons__icon', false, ['loading' => 'lazy']) !!}
    <InnerBlocks template="{{ $block->template }}" />
      {!! wp_get_attachment_image($img1, 'text-icons__icon', false, ['loading' => 'lazy']) !!}
  </div>
</section>
