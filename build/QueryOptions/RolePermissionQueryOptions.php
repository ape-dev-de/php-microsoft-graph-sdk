<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RolePermission resources
 *
 * Available select fields:
 * - resourceActions
 */
class RolePermissionQueryOptions extends QueryOptions
{
    public const FIELD_RESOURCE_ACTIONS = 'resourceActions';

    /**
     * Select specific RolePermission properties
     * 
     * @param array<string> $select Use RolePermissionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
