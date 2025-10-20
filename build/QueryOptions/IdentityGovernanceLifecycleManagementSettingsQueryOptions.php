<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceLifecycleManagementSettings resources
 *
 * Available select fields:
 * - emailSettings
 * - workflowScheduleIntervalInHours
 */
class IdentityGovernanceLifecycleManagementSettingsQueryOptions extends QueryOptions
{
    public const FIELD_EMAIL_SETTINGS = 'emailSettings';
    public const FIELD_WORKFLOW_SCHEDULE_INTERVAL_IN_HOURS = 'workflowScheduleIntervalInHours';

    /**
     * Select specific IdentityGovernanceLifecycleManagementSettings properties
     * 
     * @param array<string> $select Use IdentityGovernanceLifecycleManagementSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
