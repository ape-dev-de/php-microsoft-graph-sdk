<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppAppAssignmentSettings resources
 *
 * Available select fields:
 */
class IosVppAppAssignmentSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosVppAppAssignmentSettings
     */

    /**
     * Select specific IosVppAppAssignmentSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
