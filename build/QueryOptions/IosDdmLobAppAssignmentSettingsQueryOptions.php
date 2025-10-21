<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosDdmLobAppAssignmentSettings resources
 *
 * Available select fields:
 */
class IosDdmLobAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosDdmLobAppAssignmentSettings
     */

    /**
     * Select specific IosDdmLobAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
