<footer class="footer-wrapper">
  <div class="footer-information">
    <a class="footer-logo block md:hidden" href="{{ home_url('/') }}">
      {!! wp_get_attachment_image($footer_logo_responsive, 'footer_logo', false, ['loading' => 'lazy']) !!}
    </a>
    <a class="footer-logo hidden md:block" href="{{ home_url('/') }}">
      {!! wp_get_attachment_image($footer_logo, 'footer_logo', false, ['loading' => 'lazy']) !!}
    </a>
    <p>{!! $footer_text !!}</p>
    <p class="footer-social-cta flex max-md:hidden">{!! $social_cta !!}</p>
    <div class="social-footer flex max-md:hidden">
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
  </div>
  <div class="footer-nav">
    @if (has_nav_menu('footer_navigation'))
    <p class="footer-menu-title">{{ wp_get_nav_menu_name('footer_navigation') }}</p>
    <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif
  </div>
  <div class="footer-form">
    <p class="footer-form-title">{!! $form_title !!}</p>
    <p class="footer-form-subtitle">{!! $form_subtitle !!}</p>
    @if($footer_form !== '')
      @htmlform($footer_form)
    @endif
    <p class="footer-social-cta hidden max-md:flex">{!! $social_cta !!}</p>
    <div class="social-footer hidden max-md:flex">
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
  </div>
</footer>
