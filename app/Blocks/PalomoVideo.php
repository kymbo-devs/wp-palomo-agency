<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoVideo extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Video', 'sage'),
            'description' => __('A simple Palomo Video block.', 'sage'),
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
                'acf/palomo-c-t-a' => ['text' => 'Get Started', 'url' => '#'],
            ],
        ];
    }

    /**
     * The example data.
     */
    public function example(): array
    {
        return [
            'title' => 'We take creatives',
            'subtitle' => 'very seriously...',
            'desc' => 'and we make it hassle-free for you...',
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'title' => $this->title(),
            'subtitle' => $this->subtitle(),
            'desc' => $this->desc(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoVideo = Builder::make('palomo_video');

        $palomoVideo
            ->addText('title')
            ->addText('subtitle')
            ->addText('desc');

        return $palomoVideo->build();
    }

    /**
     * Return the title field.
     *
     * @return string
     */
    public function title()
    {
        return get_field('title') ?: $this->example['title'];
    }

    /**
     * Return the subtitle field.
     * 
     * @return string
     */
    public function subtitle()
    {
        return get_field('subtitle') ?: $this->example['subtitle'];
    }

    /**
     * Return the description field.
     * 
     * @return string
     */
    public function desc()
    {
        return get_field('desc') ?: $this->example['desc'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
