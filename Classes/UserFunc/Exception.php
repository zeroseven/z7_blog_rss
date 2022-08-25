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
    /**
     * @param string $content
     * @param array $configuration
     * @throws BadRequestException
     * @throws ForbiddenException
     * @throws PageNotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     */
    public function throw(string $content, array $configuration): void
    {
        $status = (int)($configuration['status'] ?? 0);
        $message = (string)($configuration['message'] ?? 'Missing key "message" in exception configuration!');

        if ($status === 401) {
            throw new UnauthorizedException($message, 1598650191);
        }

        if ($status === 403) {
            throw new ForbiddenException($message, 1598650192);
        }

        if ($status === 404) {
            throw new PageNotFoundException($message, 1598650193);
        }

        if ($status === 503) {
            throw new ServiceUnavailableException($message, 1598650194);
        }

        throw new BadRequestException($message, 1598650195);
    }
}
