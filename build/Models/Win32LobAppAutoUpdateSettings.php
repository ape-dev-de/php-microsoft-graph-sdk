<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAutoUpdateSettings
 */
class Win32LobAppAutoUpdateSettings
{
    /**  */
    public ?Win32LobAutoUpdateSupersededAppsState $autoUpdateSupersededAppsState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['autoUpdateSupersededAppsState'])) {
            $this->autoUpdateSupersededAppsState = is_array($data['autoUpdateSupersededAppsState']) ? new Win32LobAutoUpdateSupersededAppsState($data['autoUpdateSupersededAppsState']) : $data['autoUpdateSupersededAppsState'];
        }
    }
}
