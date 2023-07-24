<?php
/**
 * Copyright © FATCHIP GmbH. All rights reserved.
 * See LICENSE file for license details.
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

$aModule = [
    'id' => 'ymaddressverification',
    'title' => 'YellowMap Address Autocomplete & Verification',
    'description' => [
        'de' => 'Integration von YellowMap Autovervollständigung',
        'en' => 'Integration of YellowMap Autocomplete',
    ],
    'version' => '1.0.0',
    'author' => 'FATCHIP GmbH im Auftrag der YellowMap AG',
    'email' => 'maps@yellowmap.de',
    'url' => 'https://www.smartmaps.net',
    'thumbnail' => 'img/SmartMaps_poweredbyYM.svg',
    'extend' => [
        \OxidEsales\Eshop\Core\ViewConfig::class => YellowMap\YMAddressVerification\extend\Core\YMViewConfig::class
    ],
    'controllers' => [],
    'settings'   => [
        [
            'group' => 'ymaddressverification_settings',
            'name' => 'sYMAddressVerificationApiKey',
            'type' => 'str',
            'value' => ''
        ]
    ],
    'events' => [],
];
