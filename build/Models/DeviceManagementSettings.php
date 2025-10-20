<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementSettings
 */
class DeviceManagementSettings
{
    /**
     * The number of days a device is allowed to go without checking in to remain compliant.
     */
    private ?float $deviceComplianceCheckinThresholdDays;

    /**
     * Is feature enabled or not for scheduled action for rule.
     */
    private ?bool $isScheduledActionEnabled;

    /**
     * Device should be noncompliant when there is no compliance policy targeted when this is true
     */
    private ?string $secureByDefault;

    public function getDeviceComplianceCheckinThresholdDays(): ?float
    {
        return $this->deviceComplianceCheckinThresholdDays;
    }

    public function setDeviceComplianceCheckinThresholdDays(?float $deviceComplianceCheckinThresholdDays): self
    {
        $this->deviceComplianceCheckinThresholdDays = $deviceComplianceCheckinThresholdDays;
        return $this;
    }

    public function getIsScheduledActionEnabled(): ?bool
    {
        return $this->isScheduledActionEnabled;
    }

    public function setIsScheduledActionEnabled(?bool $isScheduledActionEnabled): self
    {
        $this->isScheduledActionEnabled = $isScheduledActionEnabled;
        return $this;
    }

    public function getSecureByDefault(): ?string
    {
        return $this->secureByDefault;
    }

    public function setSecureByDefault(?string $secureByDefault): self
    {
        $this->secureByDefault = $secureByDefault;
        return $this;
    }

}
