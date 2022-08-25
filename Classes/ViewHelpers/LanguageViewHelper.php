<?php

declare(strict_types=1);

namespace Zeroseven\Z7BlogRss\ViewHelpers;

use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

class LanguageViewHelper extends AbstractTagBasedViewHelper
{
    protected $tagName = 'language';

    public function render(): string
    {
        if ($GLOBALS['TSFE'] instanceof TypoScriptFrontendController && $language = $GLOBALS['TSFE']->config['config']['language'] ?? null) {
            $this->tag->setContent($language);
            return $this->tag->render();
        }

        return '';
    }
}
