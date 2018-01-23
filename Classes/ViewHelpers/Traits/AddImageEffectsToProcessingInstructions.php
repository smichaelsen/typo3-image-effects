<?php

namespace Smichaelsen\ImageEffects\ViewHelpers\Traits;

use Smichaelsen\ImageEffects\Utility\ImageMagickParameters;
use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\FileReference;

trait AddImageEffectsToProcessingInstructions
{

    protected static function addImageEffectsToProcessingInstructions(FileInterface $image, array $processingInstructions): array
    {
        if (!$image instanceof FileReference) {
            return $processingInstructions;
        }

        if ($image->getProperty('tx_imageeffects_filter') !== 'nofilter' && $image->getProperty('tx_imageeffects_filter') !== null) {
            $processingInstructions['additionalParameters'] = ImageMagickParameters::getFilter($image->getProperty('tx_imageeffects_filter'));
        } else {
            $processingInstructions['additionalParameters'] = '';
            if ($image->getProperty('tx_imageeffects_brightness') !== 'dont_change' && $image->getProperty('tx_imageeffects_brightness') !== null) {
                $processingInstructions['additionalParameters'] .= ' ' . ImageMagickParameters::getBrightness($image->getProperty('tx_imageeffects_brightness'));
            }
            if ($image->getProperty('tx_imageeffects_saturation') !== 'dont_change' && $image->getProperty('tx_imageeffects_saturation') !== null) {
                $processingInstructions['additionalParameters'] .= ' ' . ImageMagickParameters::getSaturation($image->getProperty('tx_imageeffects_saturation'));
            }
        }
        return $processingInstructions;
    }

}
