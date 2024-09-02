<div class="ksp-border"></div>
<section class="{{ $block->classes }} ksp-section page-width" style="{{ $block->inlineStyle }}">
    @if ($title)
        <h2 class="ksp-section__title">{!! $title !!}</h2>
    @endif
    @if ($ksp)
        <div class="ksp-section__container">
            @foreach ($ksp as $k)
                <div class="ksp-section__item">
                    @if ($k['wistia_id'])
                        <div class="ksp-section__video">
                            @include('partials.wistia-video', ['id' => $k['wistia_id']])
                        </div>
                    @endif
                    <div class="ksp-section__info">
                        @foreach ($k['tag'] as $tag)
                            <span class="ksp-section__tag">{{ $tag['tag_text'] }}</span>
                        @endforeach
                        <p>{{ $k['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
    @endif
</section>
