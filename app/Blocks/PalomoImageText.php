<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoImageText extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Image Text', 'sage'),
            'description' => __('A simple Palomo Image Text block.', 'sage'),
            'category' => 'formatting',
            'icon' => 'editor-ul',
            'keywords' => [],
            'post_types' => [],
            'parent' => [],
            'ancestor' => [],
            'mode' => 'editor',
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
                'jsx' => false,
                'color' => false,
            ],
            'template' => false,
        ];
    }

    /**
     * The example data.
     */
    public function example(): array
    {
        return [
            'items' => [
                [
                    'is_reversed' => false,
                    'image' => 1,
                    'title' => 'Title',
                    'content' => 'Content',
                    'logo_image' => 1,
                    'button_text' => 'Get started',
                    'button_link' => [
                        'url' => '',
                        'title' => '',
                        'target' => '',
                    ],
                ],
                [
                    'is_reversed' => true,
                    'image' => 1,
                    'title' => 'Title',
                    'content' => 'Content',
                    'logo_image' => 1,
                    'button_text' => 'Get started',
                    'button_link' => [
                        'url' => '',
                        'title' => '',
                        'target' => '',
                    ],
                ]
            ],
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'items' => $this->items(),
            'title_txt' => get_field('title_txt') ?: 'STUDY <strong>CASES</strong>',
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoImageText = Builder::make('palomo_image_text');

        $palomoImageText
            ->addText('title_txt')
            ->addRepeater('items')
                ->addTrueFalse('is_reversed', [
                    'message' => 'Is reversed?',
                    'default_value' => 0,
                ])
                ->addImage('image', [
                    'return_format' => 'id',
                ])
                ->addText('title')
                ->addTextarea('content')
                ->addImage('logo_image', [
                    'return_format' => 'id',
                    
                ])
                ->addText('button_text')
                ->addLink('button_link')
            ->endRepeater();

        return $palomoImageText->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('items') ?: $this->example['items'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
