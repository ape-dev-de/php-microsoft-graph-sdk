<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAutoUpdateSettings
 */
class Win32LobAppAutoUpdateSettings
{
    public function __construct(
        /**  */
        public ?Win32LobAutoUpdateSupersededAppsState $autoUpdateSupersededAppsState = null
    ) {}
}
