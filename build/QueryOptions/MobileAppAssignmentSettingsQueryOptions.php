<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppAssignmentSettings resources
 *
 * Available select fields:
 */
class MobileAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppAssignmentSettings
     */

    /**
     * Select specific MobileAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
