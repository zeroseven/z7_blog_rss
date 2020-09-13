<?php

declare(strict_types=1);

namespace Zeroseven\Z7BlogRss\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;
use Zeroseven\Z7Blog\Service\RootlineService;

class LinkViewHelper extends AbstractTagBasedViewHelper
{
    protected $tagName = 'link';

    public function render(): string
    {
        $link = GeneralUtility::makeInstance(ObjectManager::class)->get(UriBuilder::class)
            ->reset()
            ->setTargetPageUid(RootlineService::getRootPage())
            ->setCreateAbsoluteUri(true)
            ->build();

        if ($link) {
            $this->tag->setContent($link);
            return $this->tag->render();
        }

        return '';
    }
}
