<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleDefinition resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - isBuiltIn
 * - rolePermissions
 * - roleAssignments
 */
class RoleDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleDefinition
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_BUILT_IN = 'isBuiltIn';
    public const FIELD_ROLE_PERMISSIONS = 'rolePermissions';
    public const FIELD_ROLE_ASSIGNMENTS = 'roleAssignments';

    /**
     * Select specific RoleDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
