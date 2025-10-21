<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOsLobAppAssignmentSettings resources
 *
 * Available select fields:
 */
class MacOsLobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOsLobAppAssignmentSettings
     */

    /**
     * Select specific MacOsLobAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
