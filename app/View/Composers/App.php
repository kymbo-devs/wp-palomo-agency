<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'logo' => get_field('logo', 'option'),
            'CTA' => get_field('CTA', 'option'),
            'CTA_link' => get_field('CTA_link', 'option'),
            'show_announcement' => get_field('show_announcement', 'option'),
            'announcement_text' => get_field('announcement_text', 'option'),
            'footer_logo' => get_field('footer_logo', 'option'),
            'footer_text' => get_field('footer_text', 'option'),
            'footer_form' => get_field('footer_form', 'option'),
            'social_cta' => get_field('social_cta', 'option'),
            'facebook' => get_field('facebook', 'option'),
            'instagram' => get_field('instagram', 'option'),
            'linkedin' => get_field('linkedin', 'option'),
            'whatsapp' => get_field('whatsapp', 'option'),
            'tiktok' => get_field('tiktok', 'option'),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
}
