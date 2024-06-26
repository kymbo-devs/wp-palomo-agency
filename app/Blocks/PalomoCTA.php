<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoCTA extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo C T A', 'sage'),
            'description' => __('A simple Palomo C T A block.', 'sage'),
            'category' => 'formatting',
            'icon' => 'editor-ul',
            'keywords' => [],
            'post_types' => [],
            'parent' => [],
            'ancestor' => [],
            'mode' => 'preview',
            'align' => '',
            'align_text' => '',
            'align_content' => '',
            'supports' => [
                'align' => true,
                'align_text' => false,
                'align_content' => false,
                'full_height' => false,
                'anchor' => false,
                'mode' => false,
                'multiple' => true,
                'jsx' => true,
                'color' => false,
            ],
            'styles' => false,
            'template' => false,
        ];
    }

    /**
     * The example data.
     */
    public function example(): array
    {
        return [
            'text' => 'Get Started',
            'url' => '#',
            'partner' => '1',
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'text' => $this->text(),
            'url' => $this->url(),
            'partner' => $this->partner(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoCTA = Builder::make('palomo_c_t_a');

        $palomoCTA
            ->addImage('partner', ['label' => 'Next to button', 'return_format' => 'id'])
            ->addText('text', ['label' => 'Button text'])
            ->addText('url', ['label' => 'Button URL']);
        return $palomoCTA->build();
    }

    /**
     * Return the text field.
     *
     * @return string
     */
    public function text()
    {
        return get_field('text') ?: $this->example['text'];
    }

    /**
     * Return the url field.
     *
     * @return string
     */
    public function url()
    {
        return get_field('url') ?: $this->example['url'];
    }

    /**
     * Return the partner field.
     *
     * @return string
     */

    public function partner()
    {
        return get_field('partner') ?: $this->example['partner'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
