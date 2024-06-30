<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoKSP extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo K S P', 'sage'),
            'description' => __('A simple Palomo K S P block.', 'sage'),
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
                'color' => [
                    'background' => true,
                    'text' => true,
                    'gradient' => true,
                ],
            ],
            'styles' => ['light', 'dark'],
            'template' => [
                'core/heading' => ['placeholder' => 'Hello World'],
                'core/paragraph' => ['placeholder' => 'Welcome to the Palomo K S P block.'],
            ],
        ];
    }

    /**
     * The example data.
     */
    public function example(): array
    {
        return [
            'items' => [
                ['item' => 'Item one'],
                ['item' => 'Item two'],
                ['item' => 'Item three'],
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
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoKSP = Builder::make('palomo_k_s_p');

        $palomoKSP
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $palomoKSP->build();
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
