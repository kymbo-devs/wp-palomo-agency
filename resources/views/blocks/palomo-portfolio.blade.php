<section class="{{ $block->classes }} portfolio-section page-width" style="{{ $block->inlineStyle }}">
  @if ($txt_title)
    <h2 class="portfolio-section__title">{!! $txt_title !!}</h2>
  @endif
  @if ($videos)
    <div class="portfolio-section__videos">
      @foreach ($videos as $v)
        @if ($v['wistia_id'])
          <div class="portfolio-section__video">
              @include('partials.wistia-video', ['id' => $v['wistia_id']])
          </div>
        @endif
      @endforeach
    </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif

  <div>
    <InnerBlocks template="{{ $block->template }}" />
  </div>

  <script>
    jQuery(document).ready(function(){
      $('.portfolio-section__videos').slick({
        autoplay: true,
        slidesToShow: 4,
        infinite: true,
        arrows: true,
        centeredMode: true,
        pauseOnHover: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              infinite: true,
              dots: true,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
            }
          }
        ],
      });
    });
  </script>
</section>
