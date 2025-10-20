<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleScheduleBase resources
 *
 * Available select fields:
 * - appScopeId
 * - createdDateTime
 * - createdUsing
 * - directoryScopeId
 * - modifiedDateTime
 * - principalId
 * - roleDefinitionId
 * - status
 * - appScope
 * - directoryScope
 * - principal
 * - roleDefinition
 */
class UnifiedRoleScheduleBaseQueryOptions extends QueryOptions
{
    public const FIELD_APP_SCOPE_ID = 'appScopeId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CREATED_USING = 'createdUsing';
    public const FIELD_DIRECTORY_SCOPE_ID = 'directoryScopeId';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_ROLE_DEFINITION_ID = 'roleDefinitionId';
    public const FIELD_STATUS = 'status';
    public const FIELD_APP_SCOPE = 'appScope';
    public const FIELD_DIRECTORY_SCOPE = 'directoryScope';
    public const FIELD_PRINCIPAL = 'principal';
    public const FIELD_ROLE_DEFINITION = 'roleDefinition';

    /**
     * Select specific UnifiedRoleScheduleBase properties
     * 
     * @param array<string> $select Use UnifiedRoleScheduleBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
