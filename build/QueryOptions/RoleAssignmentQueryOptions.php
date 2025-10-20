<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleAssignment resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - resourceScopes
 * - roleDefinition
 */
class RoleAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_RESOURCE_SCOPES = 'resourceScopes';
    public const FIELD_ROLE_DEFINITION = 'roleDefinition';

    /**
     * Select specific RoleAssignment properties
     * 
     * @param array<string> $select Use RoleAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
