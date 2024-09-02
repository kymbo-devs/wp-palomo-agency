<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoSlider extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Palomo Slider';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Palomo Slider block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'slides';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The ancestor block type allow list.
     *
     * @var array
     */
    public $ancestor = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => false,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => false,
        'jsx' => true,
        'color' => false,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    // public $styles = false;

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'Column' => [
            ['item' => '1 one'],
            ['item' => '1 two'],
            ['item' => '1 three'],
            ['item' => '1 four'],
        ],
        'ColumnTwo' => [
            ['item' => '2 one'],
            ['item' => '2 two'],
            ['item' => '2 three'],
            ['item' => '2 four'],
        ],
        'ColumnThree' => [
            ['item' => '3 one'],
            ['item' => '3 two'],
            ['item' => '3 three'],
            ['item' => '3 four'],
        ],
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Scale to 1M/mo with Psychology Driven'],
        'core/paragraph' => ['placeholder' => 'We help brands and agencies grow with performance-focused creatives'],
        'acf/palomo-c-t-a' => ['text' => 'Get Started', 'url' => '#'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'Column' => $this->items(1),
            'ColumnTwo' => $this->items(2),
            'ColumnThree' => $this->items(3),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoSlider = Builder::make('palomo_slider');

        $palomoSlider
            ->addRepeater('Column', [
                'label' => 'Column One',
                'layout' => 'block',
                'min' => 4,
            ])
                ->addImage('video', ['label' => 'Video', 'return_format' => 'url'])
            ->endRepeater()
            ->addRepeater('ColumnTwo', [
                'label' => 'Column Two',
                'layout' => 'block',
                'min' => 4,
            ])
                ->addImage('video', ['label' => 'Video', 'return_format' => 'url'])
            ->endRepeater()
            ->addRepeater('ColumnThree', [
                'label' => 'Column Three',
                'layout' => 'block',
                'min' => 4,
            ])
                ->addImage('video', ['label' => 'Video', 'return_format' => 'url'])
            ->endRepeater();

        return $palomoSlider->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function items($num)
    {
        if ($num === 1) {
            return get_field('Column') ?: $this->example['Column'];
        }
        if ($num === 2) {
            return get_field('ColumnTwo') ?: $this->example['ColumnTwo'];
        }
        if ($num === 3) {
            return get_field('ColumnThree') ?: $this->example['ColumnThree'];
        }
        return [];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
