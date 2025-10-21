<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceUserSummary resources
 *
 * Available select fields:
 * - failedTasks
 * - failedUsers
 * - successfulUsers
 * - totalTasks
 * - totalUsers
 */
class IdentityGovernanceUserSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceUserSummary
     */
    public const FIELD_FAILED_TASKS = 'failedTasks';
    public const FIELD_FAILED_USERS = 'failedUsers';
    public const FIELD_SUCCESSFUL_USERS = 'successfulUsers';
    public const FIELD_TOTAL_TASKS = 'totalTasks';
    public const FIELD_TOTAL_USERS = 'totalUsers';

    /**
     * Select specific IdentityGovernanceUserSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
