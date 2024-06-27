<div class="{{ $block->classes }} wistia-video page-width" style="{{ $block->inlineStyle }}">
  <div class="wistia-title">
    @if($title)
      <h2 class="wistia-video__title">{{ $title }}</h2>
    @endif

    @if($subtitle)
      <p class="wistia-video__subtitle">{{ $subtitle }}</p>
    @endif
  </div>

  <div class="wistia-video__container">
    <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
        <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
            <div class="wistia_embed wistia_async_wh7uofrfq7 seo=true videoFoam=true"
                style="height:100%;position:relative;width:100%">
                <div class="wistia_swatch"
                    style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                    <img src="https://fast.wistia.com/embed/medias/wh7uofrfq7/swatch"
                        style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt=""
                        aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                </div>
            </div>
        </div>
    </div>
  </div>

  @if($desc)
    <p class="wistia-video__description">{{ $desc }}</p>
  @endif

  <div>
    <InnerBlocks template="{{ $block->template }}" />
  </div>

</div>
