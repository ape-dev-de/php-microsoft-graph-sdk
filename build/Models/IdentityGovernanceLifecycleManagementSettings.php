<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceLifecycleManagementSettings
 */
class IdentityGovernanceLifecycleManagementSettings
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?EmailSettings $emailSettings = null;

    /** The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours. */
    public ?float $workflowScheduleIntervalInHours = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['emailSettings'])) {
            $this->emailSettings = is_array($data['emailSettings']) ? new EmailSettings($data['emailSettings']) : $data['emailSettings'];
        }
        if (isset($data['workflowScheduleIntervalInHours'])) {
            $this->workflowScheduleIntervalInHours = $data['workflowScheduleIntervalInHours'];
        }
    }
}
