<header class="header_wrapper fixed z-10 w-full">

  <div class="announcement_header"> 
    @includeWhen($show_announcement == 1,'partials.announcement')
 </div>

  <div class="header">
    <a class="logo" href="{{ home_url('/') }}">
      {!! wp_get_attachment_image($logo, 'header_logo', false, ['loading' => 'lazy']) !!}
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <x-coolicon-hamburger-md />
      </button>
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  
    <a class="cta max-md:hidden" href="{!! $CTA_link !!}">{!! $CTA !!}</a>
  </div>
  <menu-drawer>
    <div class="drawer-menu__overlay"></div>
    <div class="drawer-menu">
      <button class="drawer-menu__close">
        <x-css-close />
      </button>
      <hr>
      <nav class="nav-primary drawer-menu__nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    </div>
  </menu-drawer>
  <a class="cta md:hidden" href="{!! $CTA_link !!}">{!! $CTA !!}</a>
</header>
