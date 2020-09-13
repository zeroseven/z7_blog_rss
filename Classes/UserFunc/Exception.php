<?php

declare(strict_types=1);

namespace Zeroseven\Z7BlogRSS\UserFunc;

use TYPO3\CMS\Core\Error\Http\BadRequestException;
use TYPO3\CMS\Core\Error\Http\ForbiddenException;
use TYPO3\CMS\Core\Error\Http\PageNotFoundException;
use TYPO3\CMS\Core\Error\Http\ServiceUnavailableException;
use TYPO3\CMS\Core\Error\Http\UnauthorizedException;

class Exception
{
    public function throw(string $content, array $configuration): void
    {
        $status = (int)$configuration['status'];
        $message = $configuration['message'];

        if ($status === 401) {
            throw new UnauthorizedException($message ?? null, 1598650191);
        }

        if ($status === 403) {
            throw new ForbiddenException($message ?? null, 1598650192);
        }

        if ($status === 404) {
            throw new PageNotFoundException($message ?? null, 1598650193);
        }

        if ($status === 503) {
            throw new ServiceUnavailableException($message ?? null, 1598650194);
        }

        throw new BadRequestException($message ?? null, 1598650195);
    }
}
