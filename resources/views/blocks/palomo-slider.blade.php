<section class="hero {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="hero__content">
    <InnerBlocks template="{{ $block->template }}" />
  </div>
  @if ($Column && $ColumnTwo && $ColumnThree)
  <div class="hero__videos-carrusel desktop">
    <div class="slider-banner">
      @foreach ($Column as $item)
        <div>
            <img class="video-item" src="{!! $item['video'] !!}" alt="Video portfolio" loading="lazy" />
        </div>
      @endforeach
    </div>
    <div id="second-banner" class="slider-banner">
      @foreach ($ColumnTwo as $item)
        <div>
          <img class="video-item" src="{!! $item['video'] !!}" alt="Video portfolio" loading="lazy" />
        </div>
      @endforeach
    </div>
    <div class="slider-banner">
      @foreach ($ColumnThree as $item)
        <div>
          <img class="video-item" src="{!! $item['video'] !!}" alt="Video portfolio" loading="lazy" />
        </div>
      @endforeach
    </div>
  </div>
  <div class="hero__videos-carrusel mobile">
    <div class="slider-banner-mobile">
      @foreach (array_merge($Column, $ColumnTwo, $ColumnThree) as $item)
        <div>
          <img class="video-item" src="{!! $item['video'] !!}" alt="Video portfolio" loading="lazy" />
        </div>
      @endforeach
    </div>
  </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
  <script>
    jQuery(document).ready(function(){
      $('.slider-banner').slick({
        speed: 5000,
        autoplay: true,
        autoplaySpeed: 0,
        vertical: true,
        cssEase: 'linear',
        slidesToShow: 2,
        infinite: true,
        arrows: false,
        centeredMode: true,
        pauseOnHover: false,
        pauseOnFocus: false,
      });
      $('.slider-banner-mobile').slick({
        speed: 9000,
        autoplay: true,
        autoplaySpeed: 0,
        vertical: false,
        cssEase: 'linear',
        slidesToShow: 2,
        infinite: true,
        arrows: false,
        centeredMode: true,
        pauseOnHover: false,
        pauseOnFocus: false,
      });
    });
  </script>
</section>
