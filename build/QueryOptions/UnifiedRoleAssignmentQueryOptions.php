<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignment resources
 *
 * Available select fields:
 * - appScopeId
 * - condition
 * - directoryScopeId
 * - principalId
 * - roleDefinitionId
 * - appScope
 * - directoryScope
 * - principal
 * - roleDefinition
 */
class UnifiedRoleAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_APP_SCOPE_ID = 'appScopeId';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_DIRECTORY_SCOPE_ID = 'directoryScopeId';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_ROLE_DEFINITION_ID = 'roleDefinitionId';
    public const FIELD_APP_SCOPE = 'appScope';
    public const FIELD_DIRECTORY_SCOPE = 'directoryScope';
    public const FIELD_PRINCIPAL = 'principal';
    public const FIELD_ROLE_DEFINITION = 'roleDefinition';

    /**
     * Select specific UnifiedRoleAssignment properties
     * 
     * @param array<string> $select Use UnifiedRoleAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
