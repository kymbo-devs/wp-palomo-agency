<header class="header_wrapper">

  @includeWhen($show_announcement == 1,'partials.announcement')
  <div class="header">
    <a class="logo" href="{{ home_url('/') }}">
      {!! wp_get_attachment_image($logo, 'header_logo', false, ['loading' => 'lazy']) !!}
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  
    <a class="cta" href="{!! $CTA_link !!}">{!! $CTA !!}</p>
  </div>
</header>
