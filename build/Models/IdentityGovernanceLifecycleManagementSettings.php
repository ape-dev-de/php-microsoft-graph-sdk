<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceLifecycleManagementSettings
 */
class IdentityGovernanceLifecycleManagementSettings
{
    /**
     */
    private ?string $emailSettings;

    /**
     * The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
     */
    private ?string $workflowScheduleIntervalInHours;


    public function getEmailSettings(): ?string
    {
        return $this->emailSettings;
    }

    public function setEmailSettings(?string $emailSettings): self
    {
        $this->emailSettings = $emailSettings;
        return $this;
    }

    public function getWorkflowScheduleIntervalInHours(): ?string
    {
        return $this->workflowScheduleIntervalInHours;
    }

    public function setWorkflowScheduleIntervalInHours(?string $workflowScheduleIntervalInHours): self
    {
        $this->workflowScheduleIntervalInHours = $workflowScheduleIntervalInHours;
        return $this;
    }

}
