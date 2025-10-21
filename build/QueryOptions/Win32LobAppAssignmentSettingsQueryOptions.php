<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppAssignmentSettings resources
 *
 * Available select fields:
 */
class Win32LobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppAssignmentSettings
     */

    /**
     * Select specific Win32LobAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
