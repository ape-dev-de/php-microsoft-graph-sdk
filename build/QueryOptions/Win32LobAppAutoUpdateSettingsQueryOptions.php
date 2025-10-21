<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppAutoUpdateSettings resources
 *
 * Available select fields:
 * - autoUpdateSupersededAppsState
 */
class Win32LobAppAutoUpdateSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppAutoUpdateSettings
     */
    public const FIELD_AUTO_UPDATE_SUPERSEDED_APPS_STATE = 'autoUpdateSupersededAppsState';

    /**
     * Select specific Win32LobAppAutoUpdateSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
