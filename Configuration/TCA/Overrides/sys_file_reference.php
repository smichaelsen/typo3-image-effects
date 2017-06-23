<?php

$tempColumns = [
    'tx_imageeffects_brightness' => [
        'label' => 'LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness',
        'exclude' => true,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '',
            'items' => [
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.minus30', '-gamma 0.7'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.minus20', '-gamma 0.8'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.minus10', '-gamma 0.9'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.dont_change', ''],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.plus10', '-gamma 1.1'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.plus20', '-gamma 1.2'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.plus30', '-gamma 1.3'],
            ],
            'size' => 1,
            'maxitems' => 1,
        ],
    ],
    'tx_imageeffects_saturation' => [
        'label' => 'LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation',
        'exclude' => true,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '',
            'items' => [
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus30', '-modulate 100,70'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus20', '-modulate 100,80'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus10', '-modulate 100,90'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.dont_change', ''],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.plus10', '-modulate 100,110'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.plus20', '-modulate 100,120'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.plus30', '-modulate 100,130'],
            ],
            'size' => 1,
            'maxitems' => 1,
        ],
    ],
    'tx_imageeffects_filter' => [
        'label' => 'LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter',
        'exclude' => true,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '',
            'items' => [
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.nofilter', '', 'EXT:image_effects/Resources/Public/Images/sample_nofilter.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.1977', '-contrast -modulate 110,130', 'EXT:image_effects/Resources/Public/Images/sample_1977.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.aden', '+contrast -modulate 120,85,89', 'EXT:image_effects/Resources/Public/Images/sample_aden.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.brannan', '-contrast -contrast \( +clone -sepia-tone 50% \) -average', 'EXT:image_effects/Resources/Public/Images/sample_brannan.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.brooklyn', '+contrast -modulate 110,100', 'EXT:image_effects/Resources/Public/Images/sample_brooklyn.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.clarendon', '-contrast -modulate 100,135', 'EXT:image_effects/Resources/Public/Images/sample_clarendon.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.earlybird', '+contrast \( +clone -sepia-tone 80% \) -average', 'EXT:image_effects/Resources/Public/Images/sample_earlybird.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.gingham', '-modulate 105,100,94', 'EXT:image_effects/Resources/Public/Images/sample_gingham.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.hudson', '+contrast -modulate 120,110', 'EXT:image_effects/Resources/Public/Images/sample_hudson.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.inkwell', '\( +clone -sepia-tone 70% \) -average -contrast -modulate 130,100 -colorspace Gray', 'EXT:image_effects/Resources/Public/Images/sample_inkwell.jpg'],
            ],
            'selicon_cols' => 5,
            'showIconTable' => 1,
            'size' => 1,
            'maxitems' => 1,
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $tempColumns);

$GLOBALS['TCA']['sys_file_reference']['palettes']['imageEffectsPalette']['showitem'] = 'tx_imageeffects_brightness,tx_imageeffects_saturation';
