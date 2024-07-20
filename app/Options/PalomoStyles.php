<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class PalomoStyles extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Palomo Styles';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'palomo-styles';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Styles';

    /**
     * The option page permission capability.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';

    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = PHP_INT_MAX;

    /**
     * The option page visibility in the admin menu.
     *
     * @var boolean
     */
    public $menu = true;

    /**
     * The slug of another admin page to be used as a parent.
     *
     * @var string
     */
    public $parent = null;

    /**
     * The option page menu icon.
     *
     * @var string
     */
    public $icon = 'http://palomo-agency.local/wp-content/uploads/2024/06/icon-2.png';

    /**
     * Redirect to the first child page if one exists.
     *
     * @var boolean
     */
    public $redirect = true;

    /**
     * The post ID to save and load values from.
     *
     * @var string|int
     */
    public $post = 'options';

    /**
     * The option page autoload setting.
     *
     * @var bool
     */
    public $autoload = true;

    /**
     * The additional option page settings.
     *
     * @var array
     */
    public $settings = [];

    /**
     * Localized text displayed on the submit button.
     */
    public function updateButton(): string
    {
        return __('Update', 'acf');
    }

    /**
     * Localized text displayed after form submission.
     */
    public function updatedMessage(): string
    {
        return __('Palomo Styles Updated', 'acf');
    }

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $palomoStyles = Builder::make('palomo_styles');

        $palomoStyles
            ->addTab('announcement', [
                'label' => 'Announcement',
                'instructions' => 'All settings for the announcement section of the site.',
                'required' => 1,
            ])
            ->addTrueFalse('show_announcement', ['label' => 'Active'])
            ->addText('announcement_text', ['label' => 'Text'])
            ->addTab('Header', [
                'label' => 'Header',
                'instructions' => 'All settings for the header section of the site.',
                'required' => 1,
            ])
            ->addImage('logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->addText('CTA', ['label' => 'CTA'])
            ->addText('CTA_link', ['label' => 'CTA Link'])
            ->addTab('Footer')
            ->addImage('footer_logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->addImage('footer_logo_responsive', ['label' => 'Logo', 'return_format' => 'id'])
            ->addTextarea('footer_text', [
                'label' => 'Text',
                'rows' => 4,
                'instructions' => 'To add blue text wrap your blue text around this &lt;span class="text-primary">BLUE TEXT&lt;/span>'
            ])
            ->addText('footer_form', ['label' => 'Form', 'instructions' => 'To add a form slug for your HTML form in *Settings -> HTML forms.*'])
            ->addText('form_title', ['label' => 'Form Title'])
            ->addText('form_subtitle', ['label' => 'Form Subtitle'])
            ->addText('form_button', ['label' => 'Form Button'])
            ->addTab('Social media')
            ->addText('social_cta', ['label' => 'Title'])
            ->addText('facebook', ['label' => 'Facebook'])
            ->addText('instagram', ['label' => 'Instagram'])
            ->addText('linkedin', ['label' => 'Linkedin'])
            ->addText('tiktok', ['label' => 'Tiktok'])
            ->addText('whatsapp', ['label' => 'Whatsapp'])
            ->addTab('Whatsapp button')
            ->addTrueFalse('show_whatsapp', ['label' => 'Active'])
            ->addText('whatsapp_number', ['label' => 'Number'])
            ->addText('whatsapp_text', ['label' => 'Predefined message'])
            ->addTab('Pop up')
            ->addTrueFalse('show_popup', ['label' => 'Active'])
            ->addText('popup_title', ['label' => 'Title'])
            ->addText('popup_subtitle', ['label' => 'Subtitle'])
            ->addText('popup_button', ['label' => 'Button']);

        return $palomoStyles->build();
    }
}
