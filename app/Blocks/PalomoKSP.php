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
            'title' => 'WE COMBINE <strong>CREATIVITY</strong><br> WITH <strong>DATA</strong>',
            'ksp' => [
                ['desc' => 'Item one', 'tag' => [['tag_text' => 'Tag one'], ['tag_text' => 'Tag two']], 'wistia_id' => 'g3c6km5uu5'],
                ['desc' => 'Item two', 'tag' => [['tag_text' => 'Tag one'], ['tag_text' => 'Tag two']], 'wistia_id' => '4yhx8r4nxe'],
                ['desc' => 'Item three', 'tag' => [['tag_text' => 'Tag one'], ['tag_text' => 'Tag two']], 'wistia_id' => 'wh7uofrfq7'],
            ],
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'title' => get_field('title') ?: $this->example['title'],
            'ksp' => $this->ksp(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoKSP = Builder::make('palomo_k_s_p');

        $palomoKSP
            ->addText('title')
            ->addRepeater('ksp')
                ->addText('wistia_id', [
                    'label' => 'Wistia video id',
                ])
                ->addRepeater('tag')
                    ->addText('tag_text')
                ->endRepeater()
                ->addText('desc')
            ->endRepeater();

        return $palomoKSP->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function ksp()
    {
        return get_field('ksp') ?: $this->example['ksp'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
