<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoPortfolio extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Portfolio', 'sage'),
            'description' => __('A simple Palomo Portfolio block.', 'sage'),
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
            'txt_title' => 'RECENT <span class="text-white">WORK</span>',
            'videos' => [
                ['wistia_id' => 'abc123'],
                ['wistia_id' => 'def456'],
                ['wistia_id' => 'ghi789'],
            ],
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'txt_title' => get_field('txt_title') ?: 'RECENT <span class="text-white">WORK</span>',
            'videos' => $this->items(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoPortfolio = Builder::make('palomo_portfolio');

        $palomoPortfolio
            ->addText('txt_title')
            ->addRepeater('videos')
                ->addText('wistia_id')
            ->endRepeater();

        return $palomoPortfolio->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('videos') ?: $this->example['videos'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
