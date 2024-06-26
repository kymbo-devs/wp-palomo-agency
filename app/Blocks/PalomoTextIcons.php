<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoTextIcons extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Text Icons', 'sage'),
            'description' => __('A simple Palomo Text Icons block.', 'sage'),
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
                'multiple' => false,
                'jsx' => true,
                'color' => false,
            ],
            'styles' => false,
            'template' => [
                'core/heading' => ['placeholder' => 'Using precise data <br> Innovative strategy and production'],
                'core/paragraph' => ['placeholder' => 'We provide the ads your paid media team needs to maximize revenue and ROAS.'],
                'acf/palomo-c-t-a' => ['text' => 'Get Started', 'url' => '#'],
            ],
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'img1' => $this->items(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoTextIcons = Builder::make('palomo_text_icons');

        $palomoTextIcons
            ->addImage('img1', [
                'label' => __('Icon', 'sage'),
                'instructions' => __('The icon to display.', 'sage'),
                'required' => true,
                'return_format' => 'id',
            ]);

        return $palomoTextIcons->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('img1') ?: '1';
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
