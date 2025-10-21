<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosLobAppAssignmentSettings resources
 *
 * Available select fields:
 */
class IosLobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosLobAppAssignmentSettings
     */

    /**
     * Select specific IosLobAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
