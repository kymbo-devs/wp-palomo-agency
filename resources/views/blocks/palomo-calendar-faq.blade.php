<div class="{{ $block->classes }} calendar-faq-section page-width" style="{{ $block->inlineStyle }}">

<div class="calendar-title">
  <h2>{{ $heading }}</h2>
  <div class="calendly-inline-widget" data-url="https://calendly.com/jesusapalomo/free-creative-strategy-audit" style="width:100%;height:700px;"></div>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" defer></script>
</div>

<div class="faq-title">
<h3>{{ $headingfaq}}</h3>

  @if ($faqs)
 
  <accordion-component class="faq__accordion">
    <ul>
      @foreach ($faqs as $faq)
        <li>
          <button class="faq__accordion-btn accordion__trigger">
            {{ $faq['question'] }}<x-go-chevron-down-16/>
          </button>
          <div class="faq__accordion-content accordion__content">
            {{ $faq['answer'] }}
          </div>
        </li>
        @endforeach
    </ul>
  </accordion-component>
    @else
      <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
    @endif

 

   </div>

  </div>

<div>
    <InnerBlocks template="{{ $block->template }}" />
</div>