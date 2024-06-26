<section class="{{ $block->classes }} clients-logos" style="{{ $block->inlineStyle }}">
  <div class="clients-logos__header">
    <InnerBlocks template="{{ $block->template }}" />
  </div>
  @if ($clients)
  <div class="clients-logos__slider">
    <div class="clients-slider">
      @foreach ($clients as $client)
        <div>
          {!! wp_get_attachment_image( $client['logo'], 'client_logo', false, ['loading' => 'lazy'] ) !!}
        </div>
      @endforeach
    </div>
  </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
  <script>
    jQuery(document).ready(function(){
      $('.clients-slider').slick({
        speed: 2500,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        slidesToShow: 3,
        infinite: true,
        arrows: false,
        centeredMode: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        variableWidth: true,
      });
    });
  </script>
</section>
