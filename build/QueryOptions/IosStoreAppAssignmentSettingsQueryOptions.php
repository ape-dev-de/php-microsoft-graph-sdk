<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosStoreAppAssignmentSettings resources
 *
 * Available select fields:
 */
class IosStoreAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosStoreAppAssignmentSettings
     */

    /**
     * Select specific IosStoreAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
