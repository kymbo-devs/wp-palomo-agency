<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoSteps extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Steps', 'sage'),
            'description' => __('A simple Palomo Steps block.', 'sage'),
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
            'steps' => [
                ['step' => 'Item one'],
                ['step' => 'Item two'],
                ['step' => 'Item three'],
            ],
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'steps' => $this->steps(),
            'titleText' => get_field('titleText') ?: 'Title',
            'subtitleText' => get_field('subtitleText') ?: 'Subtitle',
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoSteps = Builder::make('palomo_steps');

        $palomoSteps
            ->addText('titleText')
            ->addText('subtitleText')
            ->addRepeater('steps')
                ->addImage('stepImage', [
                    'return_format' => 'id',
                ])
                ->addImage('stepIcon', [
                    'return_format' => 'url',
                ])
                ->addWysiwyg('step')
            ->endRepeater();

        return $palomoSteps->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function steps()
    {
        return get_field('steps') ?: $this->example['steps'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
