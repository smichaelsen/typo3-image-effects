<?php

namespace Smichaelsen\ImageEffects\ViewHelpers\Uri;

use Smichaelsen\ImageEffects\ViewHelpers\Traits\AddImageEffectsToProcessingInstructions;
use TYPO3\CMS\Core\Imaging\ImageManipulation\CropVariantCollection;
use TYPO3\CMS\Fluid\Core\ViewHelper\Exception;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

class ImageViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
{

    use AddImageEffectsToProcessingInstructions;

    /**
     * @inheritdoc
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $src = $arguments['src'];
        $image = $arguments['image'];
        $treatIdAsReference = $arguments['treatIdAsReference'];
        $cropString = $arguments['crop'];
        $absolute = $arguments['absolute'];

        if ((is_null($src) && is_null($image)) || (!is_null($src) && !is_null($image))) {
            throw new Exception('You must either specify a string src or a File object.', 1460976233);
        }
        $imageService = self::getImageService();
        $image = $imageService->getImage($src, $image, $treatIdAsReference);

        if ($cropString === null && $image->hasProperty('crop') && $image->getProperty('crop')) {
            $cropString = $image->getProperty('crop');
        }

        $cropVariantCollection = CropVariantCollection::create((string)$cropString);
        $cropVariant = $arguments['cropVariant'] ?: 'default';
        $cropArea = $cropVariantCollection->getCropArea($cropVariant);
        $processingInstructions = [
            'width' => $arguments['width'],
            'height' => $arguments['height'],
            'minWidth' => $arguments['minWidth'],
            'minHeight' => $arguments['minHeight'],
            'maxWidth' => $arguments['maxWidth'],
            'maxHeight' => $arguments['maxHeight'],
            'crop' => $cropArea->isEmpty() ? null : $cropArea->makeAbsoluteBasedOnFile($image),
        ];

        // START: This is the section we inserted into the original function
        $processingInstructions = self::addImageEffectsToProcessingInstructions($image, $processingInstructions);
        // END

        $processedImage = $imageService->applyProcessingInstructions($image, $processingInstructions);
        return $imageService->getImageUri($processedImage, $absolute);
    }

}
