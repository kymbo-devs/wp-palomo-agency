<div class="{{ $block->classes }} pricing-section page-width" style="{{ $block->inlineStyle }}">
  @if($title_txt)
    <h2 class="pricing-section__title">{!! $title_txt !!}</h2>
  @endif
  @if ($items)
    <div class="pricing-section__tables">
      @foreach ($items as $item)
        <table>
            <tr>
              <td>
                <p class="pricing-section__title">
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
                <div class="pricing-section__dropdown">
                  <button class="pricing-section__dropdown-btn">{!! $item['included_title'] !!}</button>
                  <div class="pricing-section__dropdown-content">
                    <ul>
                      @foreach ($item['features'] as $feature)
                        <li>{!! $feature['feature'] !!}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ $item['button_link'] }}" class="pricing-section__button btn btn-primary">{!! $item['button_text'] !!}</a>
              </td>
            </tr>
        </table>
      @endforeach
    </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
