<?php
namespace Smichaelsen\ImageEffects\ViewHelpers;

use TYPO3\CMS\Core\Resource\Exception\ResourceDoesNotExistException;
use TYPO3\CMS\Core\Resource\FileReference;

class ImageViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
{
    public function render($src = null, $width = null, $height = null, $minWidth = null, $minHeight = null, $maxWidth = null, $maxHeight = null, $treatIdAsReference = false, $image = null, $crop = null, $absolute = false)
    {
        if (is_null($src) && is_null($image) || !is_null($src) && !is_null($image)) {
            throw new \TYPO3\CMS\Fluid\Core\ViewHelper\Exception('You must either specify a string src or a File object.', 1382284106);
        }

        try {
            $image = $this->imageService->getImage($src, $image, $treatIdAsReference);
            if ($crop === null) {
                $crop = $image instanceof FileReference ? $image->getProperty('crop') : null;
            }
            $processingInstructions = [
                'width' => $width,
                'height' => $height,
                'minWidth' => $minWidth,
                'minHeight' => $minHeight,
                'maxWidth' => $maxWidth,
                'maxHeight' => $maxHeight,
                'crop' => $crop,
            ];

            // START: This is the section we inserted into the original function
            if ($image instanceof FileReference) {
                if ($image->getProperty('tx_imageeffects_filter')) {
                    $processingInstructions['additionalParameters'] = $image->getProperty('tx_imageeffects_filter');
                } else {
                    $processingInstructions['additionalParameters'] = '';
                    if ($image->getProperty('tx_imageeffects_brightness')) {
                        $processingInstructions['additionalParameters'] .= ' ' . $image->getProperty('tx_imageeffects_brightness') . ' ';
                    }
                    if ($image->getProperty('tx_imageeffects_saturation')) {
                        $processingInstructions['additionalParameters'] .= ' ' . $image->getProperty('tx_imageeffects_saturation') . ' ';
                    }
                }
            }
            // END

            $processedImage = $this->imageService->applyProcessingInstructions($image, $processingInstructions);
            $imageUri = $this->imageService->getImageUri($processedImage, $absolute);

            $this->tag->addAttribute('src', $imageUri);
            $this->tag->addAttribute('width', $processedImage->getProperty('width'));
            $this->tag->addAttribute('height', $processedImage->getProperty('height'));

            $alt = $image->getProperty('alternative');
            $title = $image->getProperty('title');

            // The alt-attribute is mandatory to have valid html-code, therefore add it even if it is empty
            if (empty($this->arguments['alt'])) {
                $this->tag->addAttribute('alt', $alt);
            }
            if (empty($this->arguments['title']) && $title) {
                $this->tag->addAttribute('title', $title);
            }
        } catch (ResourceDoesNotExistException $e) {
            // thrown if file does not exist
        } catch (\UnexpectedValueException $e) {
            // thrown if a file has been replaced with a folder
        } catch (\RuntimeException $e) {
            // RuntimeException thrown if a file is outside of a storage
        } catch (\InvalidArgumentException $e) {
            // thrown if file storage does not exist
        }

        return $this->tag->render();
    }
}
