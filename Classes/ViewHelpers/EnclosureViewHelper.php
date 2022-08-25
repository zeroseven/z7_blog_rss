<?php

declare(strict_types=1);

namespace Zeroseven\Z7BlogRss\ViewHelpers;

use Closure;
use TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

class EnclosureViewHelper extends ImageViewHelper
{
    protected $escapeOutput = false;

    public static function renderStatic(array $arguments, Closure $renderChildrenClosure, RenderingContextInterface $renderingContext): string
    {

        // Abort, if no image is given
        if (empty($arguments['src']) && empty($arguments['image'])) {
            return '';
        }

        // Get the url
        $url = parent::renderStatic(array_merge($arguments, ['absolute' => true]), $renderChildrenClosure, $renderingContext);

        // Add data of processed image
        if ($GLOBALS['TSFE'] instanceof TypoScriptFrontendController && ($lastImageInfo = $GLOBALS['TSFE']->lastImageInfo ?? null) && $processedImage = $lastImageInfo['processedFile'] ?? $lastImageInfo['originalFile']) {
            $length = $processedImage->getSize();
            $type = $processedImage->getMimeType();

            return sprintf('<enclosure url="%s" length="%s" type="%s" />', $url, $length, $type);
        }

        // Return url only
        return sprintf('<enclosure url="%s" />', $url);
    }
}
