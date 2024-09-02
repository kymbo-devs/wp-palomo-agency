<div class="{{ $block->classes }} pricing-section page-width" style="{{ $block->inlineStyle }}">
  @if($title_txt)
    <h2 class="pricing-section__title">{!! $title_txt !!}</h2>
  @endif
  @if ($items)
    <div class="pricing-section__tables">
      @foreach ($items as $item)
    <table >
            <tr>
              <td>
                <p class="pricing-section__pricetitle">
                  {!! $item['price_title'] !!}
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <p class="pricing-section__subtitle">
                  {!! $item['price_subtitle'] !!}
                </p>
                <p class="pricing-section__price">
                  {!! $item['price'] !!}
                </p>
              </td>
            </tr>
            <tr>
              <td>
                {!! wp_get_attachment_image( $item['price_image'], 'pricing-section__image', false, ['loading' => 'lazy'] ) !!}
              </td>
            </tr>
            <tr>
              <td>
                <accordion-component class="pricing-section__accordion">
                  <button class="pricing-section__accordion-btn accordion__trigger">{!! $item['included_title'] !!} <x-go-chevron-down-16/></button>
                  <div class="pricing-section__accordion-content accordion__content">
                    <ul>
                      @foreach ($item['features'] as $feature)
                        <li> <x-iconoir-check-circle-solid /> {!! $feature['feature'] !!}</li>
                      @endforeach
                    </ul>
                  </div>
                </accordion-component>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ $item['button_link'] }}" class="pricing-section__button btn btn-primary">{!! $item['button_text'] !!}<x-go-chevron-right-16 /></a>
              </td>
            </tr>
        </table>
      @endforeach
    </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
 <script>
  jQuery(document).ready(function(){
    $('.pricing-section__tables').slick({
      autoplay: false,
        slidesToShow: 3,
        infinite: true,
        arrows: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
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