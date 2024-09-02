<section class="{{ $block->classes }} wistia-video page-width" style="{{ $block->inlineStyle }}">
  <div class="wistia-title">
    @if($title)
      <h2 class="wistia-video__title">{{ $title }}</h2>
    @endif

    @if($subtitle)
      <p class="wistia-video__subtitle">{{ $subtitle }}</p>
    @endif
  </div>

  <div class="wistia-video__container">
    @include('partials.wistia-video', ['id' => $id])
  </div>

  @if($desc)
    <p class="wistia-video__description">{{ $desc }}</p>
  @endif

  <div>
    <InnerBlocks template="{{ $block->template }}" />
  </div>

</section>
