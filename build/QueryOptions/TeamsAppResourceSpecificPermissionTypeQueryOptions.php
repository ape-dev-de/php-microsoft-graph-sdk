<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppResourceSpecificPermissionType resources
 *
 * Available select fields:
 */
class TeamsAppResourceSpecificPermissionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppResourceSpecificPermissionType
     */

    /**
     * Select specific TeamsAppResourceSpecificPermissionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
