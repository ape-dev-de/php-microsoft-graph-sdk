<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppPermissionSet resources
 *
 * Available select fields:
 * - resourceSpecificPermissions
 */
class TeamsAppPermissionSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppPermissionSet
     */
    public const FIELD_RESOURCE_SPECIFIC_PERMISSIONS = 'resourceSpecificPermissions';

    /**
     * Select specific TeamsAppPermissionSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
