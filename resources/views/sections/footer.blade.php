<footer class="footer-wrapper">
  <div>
    <a class="logo" href="{{ home_url('/') }}">
      {!! wp_get_attachment_image($footer_logo, 'footer_logo', false, ['loading' => 'lazy']) !!}
    </a>
    <p>{!! $footer_text !!}</p>
    <p>{!! $social_cta !!}</p>
    <div class="social-footer">

        @if($facebook !== '')
          <a href="{{ $facebook }}" class="social-icon" target="_blank" rel="noopener noreferrer">
            <x-bi-facebook />
          </a>
        @endif

      @if($instagram !== '')
        <a href="{{ $instagram }}" class="social-icon" target="_blank" rel="noopener noreferrer">
          <x-bi-instagram />
        </a>
      @endif

      @if($tiktok !== '')
        <a href="{{ $tiktok }}" class="social-icon" target="_blank" rel="noopener noreferrer">
          <x-fab-tiktok />
        </a>
      @endif

      @if($linkedin !== '')
        <a href="{{ $linkedin }}" class="social-icon" target="_blank" rel="noopener noreferrer">
          <x-bi-linkedin />
        </a>
      @endif

      @if($whatsapp !== '')
        <a href="{{ $whatsapp }}" class="social-icon" target="_blank" rel="noopener noreferrer">
          <x-bi-whatsapp />
        </a>
      @endif

  </div>
  @if (has_nav_menu('primary_navigation'))
      <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
  @endif
  @if($footer_form !== '')
    @htmlform($footer_form)
  @endif
</footer>
