<?php

namespace App\Blocks;

use Log1x\AcfComposer\AcfComposer;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class PalomoCalendarFaq extends Block
{
    /**
     * The block attributes.
     */
    public function attributes(): array
    {
        return [
            'name' => __('Palomo Calendar Faq', 'sage'),
            'description' => __('A simple Palomo Calendar Faq block.', 'sage'),
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
                'multiple' => true,
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
            
            'faqs' => [
                [
                    'question' => 'What is the Palomo Calendar?',
                    'answer' => 'The Palomo Calendar is a simple calendar block for WordPress.',
                ],
                [
                    'question' => 'How do I use the Palomo Calendar?',
                    'answer' => 'Simply add the Palomo Calendar block to your post or page.',
                ],
                [
                    'question' => 'Can I customize the Palomo Calendar?',
                    'answer' => 'Yes, you can customize the Palomo Calendar with your own styles.',
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

        'faqs' => $this->faqs(),
          'heading' => get_field('heading'),
          'headingfaq' => get_field('headingfaq'),
            
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $palomoCalendarFaq = Builder::make('palomo_calendar_faq');

        $palomoCalendarFaq
            ->addText('heading')
            ->addText('headingfaq')
            ->addRepeater('faqs')
                ->addText('question')
                ->addText('answer')
            ->endRepeater();


        return $palomoCalendarFaq->build();
    }

    /**
     *
     * @return array
     */
    public function faqs()
    {
        return get_field('faqs') ?: $this->example['faqs'];
    }

    /**
     */
    public function assets(array $block): void
    {
        //
    }
}
