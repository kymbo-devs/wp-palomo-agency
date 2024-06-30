<section class="{{ $block->classes }} page-width section-steps" style="{{ $block->inlineStyle }}">
  @if($titleText)
    <h2 class="section-steps__text">{!! $titleText !!}</h2>
  @endif
  @if($subtitleText)
    <p class="section-steps__desc">{!! $subtitleText !!}</p>
  @endif
  @if ($steps)
    <div class="steps-dots"></div>
    <div class="section-steps__steps">
      @foreach ($steps as $step)
      <div class="section-steps__container">
          @if($step['stepIcon'])
            <style>
              .section-steps li {
                list-style-image: url({{ $step['stepIcon'] }});
              }
            </style>
          @endif
          <div class="steps-content">{!! $step['step'] !!}</div>
          <div class="steps-image">{!! wp_get_attachment_image( $step['stepImage'], 'step_image', false, ['loading' => 'lazy'] ) !!}</div>
        </div>
      @endforeach
    </div>
    <div class="steps-buttons">
      <div class="steps-arrows">
        <button class="steps-slick-prev disabled"><x-elemplus-arrow-left-bold /></button>
        <button class="steps-slick-next"><x-elemplus-arrow-right-bold /></button>
      </div>
      <InnerBlocks />
    </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
  <script>
    jQuery(document).ready(function(){
      $('.section-steps__steps').slick({
        autoplay: true,
        slidesToShow: 1,
        infinite: false,
        arrows: false,
        centeredMode: true,
        dots: true,
        customPaging: function(slick,index) {
          return '<a class="text-primary">' + (index + 1) + '</a>';
        },
        appendDots: $('.steps-dots'),
      });

      $('.steps-slick-prev').click(function(){
        $('.section-steps__steps').slick('slickPrev');
      });

      $('.steps-slick-next').click(function(){
        $('.section-steps__steps').slick('slickNext');
      });

      // Add disabled class to first and last slide
      $('.section-steps__steps').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        console.log(slick);
        $('.steps-slick-prev').removeClass('disabled');
        $('.steps-slick-next').removeClass('disabled');
        if (nextSlide === 0) {
          $('.steps-slick-prev').addClass('disabled');
        } else if (nextSlide === slick.slideCount - 1) {
          $('.steps-slick-next').addClass('disabled');
        }
      });
    });
  </script>
</section>
