<?php

return [
    'name'        => 'Advanced Templates',
    'description' => 'Plugin extends default email template capabilities with TWIG block so you can use advanced scripting techniques like conditions, loops etc',
    'version'     => '1.2',
    'author'      => 'Dmitry Berezovsky',
    'services' => [
        'other' => [
            // Template processor
            'mautic.plugin.advanced_templates.helper.template_processor' => [
                'class' => \MauticPlugin\MauticAdvancedTemplatesBundle\Helper\TemplateProcessor::class,
                'arguments' => [
                    'monolog.logger.mautic',
                    'mautic.plugin.advanced_templates.helper.twig_loader_dynamiccontent'
                ]
            ],
            'mautic.plugin.advanced_templates.helper.twig_loader_dynamiccontent' => [
                'class' => \MauticPlugin\MauticAdvancedTemplatesBundle\Helper\Twig_Loader_DynamicContent::class,
                'arguments' => [
                    'monolog.logger.mautic',
                    'mautic.model.factory'
                ]
            ],
        ]
    ]
];
