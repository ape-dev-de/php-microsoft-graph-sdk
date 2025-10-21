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
     * @var string[]
     */
    private array $scheduledActionConfigurations = [];


    public function getRuleName(): ?string
    {
        return $this->ruleName;
    }

    public function setRuleName(?string $ruleName): self
    {
        $this->ruleName = $ruleName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getScheduledActionConfigurations(): array
    {
        return $this->scheduledActionConfigurations;
    }

    /**
     * @param string[] $scheduledActionConfigurations
     */
    public function setScheduledActionConfigurations(array $scheduledActionConfigurations): self
    {
        $this->scheduledActionConfigurations = $scheduledActionConfigurations;
        return $this;
    }

}
