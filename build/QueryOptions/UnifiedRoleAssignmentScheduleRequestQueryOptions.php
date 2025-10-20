<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentScheduleRequest resources
 *
 * Available select fields:
 * - action
 * - appScopeId
 * - directoryScopeId
 * - isValidationOnly
 * - justification
 * - principalId
 * - roleDefinitionId
 * - scheduleInfo
 * - targetScheduleId
 * - ticketInfo
 * - activatedUsing
 * - appScope
 * - directoryScope
 * - principal
 * - roleDefinition
 * - targetSchedule
 */
class UnifiedRoleAssignmentScheduleRequestQueryOptions extends QueryOptions
{
    public const FIELD_ACTION = 'action';
    public const FIELD_APP_SCOPE_ID = 'appScopeId';
    public const FIELD_DIRECTORY_SCOPE_ID = 'directoryScopeId';
    public const FIELD_IS_VALIDATION_ONLY = 'isValidationOnly';
    public const FIELD_JUSTIFICATION = 'justification';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_ROLE_DEFINITION_ID = 'roleDefinitionId';
    public const FIELD_SCHEDULE_INFO = 'scheduleInfo';
    public const FIELD_TARGET_SCHEDULE_ID = 'targetScheduleId';
    public const FIELD_TICKET_INFO = 'ticketInfo';
    public const FIELD_ACTIVATED_USING = 'activatedUsing';
    public const FIELD_APP_SCOPE = 'appScope';
    public const FIELD_DIRECTORY_SCOPE = 'directoryScope';
    public const FIELD_PRINCIPAL = 'principal';
    public const FIELD_ROLE_DEFINITION = 'roleDefinition';
    public const FIELD_TARGET_SCHEDULE = 'targetSchedule';

    /**
     * Select specific UnifiedRoleAssignmentScheduleRequest properties
     * 
     * @param array<string> $select Use UnifiedRoleAssignmentScheduleRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
