<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftStoreForBusinessAppAssignmentSettings resources
 *
 * Available select fields:
 */
class MicrosoftStoreForBusinessAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftStoreForBusinessAppAssignmentSettings
     */

    /**
     * Select specific MicrosoftStoreForBusinessAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
