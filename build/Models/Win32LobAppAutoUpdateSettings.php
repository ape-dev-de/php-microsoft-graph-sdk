<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAutoUpdateSettings
 */
class Win32LobAppAutoUpdateSettings
{
    public function __construct(
        /** Contains properties used to perform the auto-update of an application. */
        public ?string $autoUpdateSupersededAppsState = null
    ) {}
}
