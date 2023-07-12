<?php
namespace DependentWorks\Module\Configuration;

$config = [
    'service_manager' => [
        'allow_override' => true,
        'aliases' => [
            'getDependentWorks' => 'DependentWorks\AjaxHandler\GetDependentWorks'
        ],
        'factories' => [
            'DependentWorks\AjaxHandler\GetDependentWorks' => 'DependentWorks\AjaxHandler\GetDependentWorksFactory',
        ],
    ],
];

return $config;

