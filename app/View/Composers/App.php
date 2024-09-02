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
            'footer_logo_responsive' => get_field('footer_logo_responsive', 'option'),
            'footer_text' => get_field('footer_text', 'option'),
            'footer_form' => get_field('footer_form', 'option'),
            'form_title' => get_field('form_title', 'option'),
            'form_subtitle' => get_field('form_subtitle', 'option'),
            'social_cta' => get_field('social_cta', 'option'),
            'facebook' => get_field('facebook', 'option'),
            'instagram' => get_field('instagram', 'option'),
            'linkedin' => get_field('linkedin', 'option'),
            'whatsapp' => get_field('whatsapp', 'option'),
            'tiktok' => get_field('tiktok', 'option'),
            'show_whatsapp' => get_field('show_whatsapp', 'option'),
            'whatsapp_number' => get_field('whatsapp_number', 'option'),
            'whatsapp_text' => get_field('whatsapp_text', 'option'),
            'show_popup' => get_field('show_popup', 'option'),
            'popup_form' => get_field('popup_form', 'option'),
            'popup_image' => get_field('popup_image', 'option'),
            'popup_title' => get_field('popup_title', 'option'),
            'popup_subtitle' => get_field('popup_subtitle', 'option'),
            'popup_button' => get_field('popup_button', 'option'),
            'show_reviews' => get_field('show_reviews', 'option'),
            'reviews' => get_field('reviews', 'option'),
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
