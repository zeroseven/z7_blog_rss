<?php

declare(strict_types=1);

namespace Zeroseven\Z7BlogRss\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

class LanguageViewHelper extends AbstractTagBasedViewHelper
{
    protected $tagName = 'language';

    public function render(): string
    {
        if ($language = $GLOBALS['TSFE']->config['config']['language'] ?? null) {
            $this->tag->setContent($language);
            return $this->tag->render();
        }

        return '';
    }
}
