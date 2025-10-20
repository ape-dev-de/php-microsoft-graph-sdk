<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRolePermission resources
 *
 * Available select fields:
 * - allowedResourceActions
 * - condition
 * - excludedResourceActions
 */
class UnifiedRolePermissionQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_RESOURCE_ACTIONS = 'allowedResourceActions';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_EXCLUDED_RESOURCE_ACTIONS = 'excludedResourceActions';

    /**
     * Select specific UnifiedRolePermission properties
     * 
     * @param array<string> $select Use UnifiedRolePermissionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
