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
    public const FIELD_DIRECTORY = 'directory';
    public const FIELD_ENTITLEMENT_MANAGEMENT = 'entitlementManagement';

    /**
     * Select specific RoleManagement properties
     * 
     * @param array<string> $select Use RoleManagementQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
