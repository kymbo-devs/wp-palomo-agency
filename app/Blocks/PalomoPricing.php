<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoPricing extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Pricing', 'sage'),
            'description' => __('A simple Palomo Pricing block.', 'sage'),
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
                'jsx' => false,
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
            'items' => [
                [
                    'price_title' => 'Basic',
                    'price_subtitle' => 'For the basics',
                    'price' => '$9.99',
                    'price_image' => 1,
                    'included_title' => 'Included',
                    'features' => [
                        [
                            'feature' => 'Feature 1',
                        ],
                        [
                            'feature' => 'Feature 2',
                        ],
                        [
                            'feature' => 'Feature 3',
                        ],
                    ],
                    'button_text' => 'Get Started',
                    'button_link' => '#',
                ],
                [
                    'price_title' => 'Pro',
                    'price_subtitle' => 'For the pros',
                    'price' => '$19.99',
                    'price_image' => 1,
                    'included_title' => 'Included',
                    'features' => [
                        [
                            'feature' => 'Feature 1',
                        ],
                        [
                            'feature' => 'Feature 2',
                        ],
                        [
                            'feature' => 'Feature 3',
                        ],
                    ],
                    'button_text' => 'Get Started',
                    'button_link' => '#',
                ],
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
            'title_txt' => get_field('title_txt') ?: 'OUR <strong>PRICES</strong>',
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoPricing = Builder::make('palomo_pricing');

        $palomoPricing
            ->addText('title_txt')
            ->addRepeater('items')
                ->addText('price_title')
                ->addText('price_subtitle')
                ->addText('price')
                ->addImage('price_image', [
                    'return_format' => 'id',
                ])
                ->addText('included_title')
                ->addRepeater('features')
                    ->addText('feature')
                ->endRepeater()
                ->addText('button_text')
                ->addLink('button_link')
            ->endRepeater();

        return $palomoPricing->build();
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
