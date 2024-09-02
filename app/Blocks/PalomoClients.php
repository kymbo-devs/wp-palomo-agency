<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoClients extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Clients', 'sage'),
            'description' => __('A simple Palomo Clients block.', 'sage'),
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
                'align' => false,
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
                'core/heading' => ['placeholder' => 'TRUSTED BY'],
            ],
        ];
    }

    /**
     * The example data.
     */
    public function example(): array
    {
        return [
            'clients' => [
                ['logo' => '1'],
                ['logo' => '2'],
                ['logo' => '3'],
                ['logo' => '4'],
            ],
        ];
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'clients' => $this->image(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoClients = Builder::make('palomo_clients');

        $palomoClients
        ->addRepeater('clients', [
            'label' => 'Clients',
            'layout' => 'block',
            'min' => 4,
        ])
            ->addImage('logo', ['label' => 'Client logo', 'return_format' => 'id'])
        ->endRepeater();

        return $palomoClients->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function image()
    {
        return get_field('clients') ?: $this->example['clients'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
