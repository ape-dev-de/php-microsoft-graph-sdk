<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleManagement resources
 *
 * Available select fields:
 * - directory
 * - entitlementManagement
 */
class RoleManagementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleManagement
     */
    public const FIELD_DIRECTORY = 'directory';
    public const FIELD_ENTITLEMENT_MANAGEMENT = 'entitlementManagement';

    /**
     * Select specific RoleManagement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
