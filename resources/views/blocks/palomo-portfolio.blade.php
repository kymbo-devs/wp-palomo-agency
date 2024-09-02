<section class="{{ $block->classes }} portfolio-section page-width relative" style="{{ $block->inlineStyle }}">
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

    
      <button class="prev-btn absolute top-2/4 right-[95%] max-md:w-[12px]">@svg('palomo-icon-left')</button>
      <button class="next-btn absolute top-2/4 left-[95%]">@svg(' icon _chevron left minor_')</button>
  
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
        arrows: false,
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
      
    
    $(".prev-btn").click(function () {
		$(".portfolio-section__videos").slick("slickPrev");
	  });
	   $(".next-btn").click(function () {
		$(".portfolio-section__videos").slick("slickNext");
	  });
	  $(".prev-btn").addClass("slick-disabled");
	  $(".portfolio-section__videos").on("afterChange", function () {
		if ($(".slick-prev").hasClass("slick-disabled")) {
			$(".prev-btn").addClass("slick-disabled");
		} else {
			$(".prev-btn").removeClass("slick-disabled");
		}
		if ($(".slick-next").hasClass("slick-disabled")) {
			$(".next-btn").addClass("slick-disabled");
		} else {
			$(".next-btn").removeClass("slick-disabled");
		}

  });
    });
  
  </script>
</section>
