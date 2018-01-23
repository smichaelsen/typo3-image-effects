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
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.dont_change', 'dont_change'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.minus30', 'minus30'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.minus20', 'minus20'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.minus10', 'minus10'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.plus10', 'plus10'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.plus20', 'plus20'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_brightness.plus30', 'plus30'],
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
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.dont_change', 'dont_change'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus90', 'minus90'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus80', 'minus80'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus70', 'minus70'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus60', 'minus60'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus50', 'minus50'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus40', 'minus40'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus30', 'minus30'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus20', 'minus20'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.minus10', 'minus10'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.plus10', 'plus10'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.plus20', 'plus20'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_saturation.plus30', 'plus30'],
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
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.nofilter', 'nofilter', 'EXT:image_effects/Resources/Public/Images/sample_nofilter.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.1977', '1977', 'EXT:image_effects/Resources/Public/Images/sample_1977.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.aden', 'aden', 'EXT:image_effects/Resources/Public/Images/sample_aden.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.brannan', 'brannan', 'EXT:image_effects/Resources/Public/Images/sample_brannan.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.brooklyn', 'brooklyn', 'EXT:image_effects/Resources/Public/Images/sample_brooklyn.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.clarendon', 'clarendon', 'EXT:image_effects/Resources/Public/Images/sample_clarendon.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.earlybird', 'earlybird', 'EXT:image_effects/Resources/Public/Images/sample_earlybird.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.gingham', 'gingham', 'EXT:image_effects/Resources/Public/Images/sample_gingham.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.hudson', 'hudson', 'EXT:image_effects/Resources/Public/Images/sample_hudson.jpg'],
                ['LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.tx_imageeffects_filter.inkwell', 'inkwell', 'EXT:image_effects/Resources/Public/Images/sample_inkwell.jpg'],
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
