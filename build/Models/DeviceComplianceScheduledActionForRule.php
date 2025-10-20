<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceScheduledActionForRule
 */
class DeviceComplianceScheduledActionForRule
{
    /**
     * Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired.
     */
    private ?string $ruleName;

    /**
     * Scheduled Action for Rule
     */
    private ?string $scheduledActionConfigurations;

    public function getRuleName(): ?string
    {
        return $this->ruleName;
    }

    public function setRuleName(?string $ruleName): self
    {
        $this->ruleName = $ruleName;
        return $this;
    }

    public function getScheduledActionConfigurations(): ?string
    {
        return $this->scheduledActionConfigurations;
    }

    public function setScheduledActionConfigurations(?string $scheduledActionConfigurations): self
    {
        $this->scheduledActionConfigurations = $scheduledActionConfigurations;
        return $this;
    }

}
