<?php
declare(strict_types = 1);

namespace Smichaelsen\ImageEffects\Utility;

use TYPO3\CMS\Core\Resource\File;

class TcaUtility
{

    const DEFAULT_FIELD_STRING = '--div--;Image Effects,--palette--;LLL:EXT:image_effects/Resources/Private/Language/locallang_db.xlf:sys_file_reference.imageEffectsPalette;imageEffectsPalette,tx_imageeffects_filter';

    public static function addImageEffectsToField(string $tableName, string $fieldName, string $fieldString = self::DEFAULT_FIELD_STRING)
    {
        $GLOBALS['TCA'][$tableName]['columns'][$fieldName]['config']['overrideChildTca']['types'][File::FILETYPE_IMAGE]['showitem'] .= ',' . $fieldString;
    }

}
