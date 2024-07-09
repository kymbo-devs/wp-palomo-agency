<section class="{{ $block->classes }} page-width section-steps" style="{{ $block->inlineStyle }}">
  @if($steps)
    <div class="steps-dots-mobile"></div>
  @endif
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
          <div class="steps-image">
            {!! wp_get_attachment_image( $step['stepImage'], 'step_image', false, ['loading' => 'lazy'] ) !!}
          </div>
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
        appendDots: $('.steps-dots'),
        customPaging: function(slick,index) {
          var dotHtml = '<div class="custom-dot">';
          if (index !== 0) {
          dotHtml += '<svg class="custom-line" width="100%" height="3" viewBox="0 0 100% 3">';
          dotHtml += '<line x1="0" y1="1.5" x2="100%" y2="1.5" stroke="#ccb591" stroke-width="3" />';
          dotHtml += '</svg>';
          }
          dotHtml += '<a class="text-white">' + (index + 1) + '</a>';
          dotHtml += '</div>';
          return dotHtml;
        },
        responsive: [
          {
            breakpoint: 768,
            settings: {
              dots: true,
              appendDots: $('.steps-dots-mobile'),
              customPaging: () => (''),
            }
          }
        ]
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

      // Change CSS for .active element and its preceding siblings up to a limit
      function highlightActiveAndPreviousSiblings(slick, currentSlide) {
        var dots = document.querySelectorAll('.steps-dots .custom-dot');

        // Add highlight class to active dot and its preceding siblings up to maxHighlight        
        if (currentSlide) {
          dots.forEach(function(dot, index) {
            if (index < currentSlide) {
              dot.classList.add('highlight');
            } else {
              dot.classList.remove('highlight');
            }
          });
        }
      }

      // Call the function initially and also on slick change event
      highlightActiveAndPreviousSiblings();
      $('.section-steps__steps').on('afterChange', function(event, slick, currentSlide){
        highlightActiveAndPreviousSiblings(slick, currentSlide);
      });
    });
  </script>
</section>
