<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcRestorePointSetting
 */
class CloudPcRestorePointSetting
{
    /**
     * The time interval in hours to take snapshots (restore points) of a Cloud PC automatically. Possible values are: default, fourHours, sixHours, twelveHours, sixteenHours, twentyFourHours, unknownFutureValue. The default value is default that indicates that the time interval for automatic capturing of restore point snapshots is set to 12 hours.
     */
    private ?string $frequencyType;

    /**
     * If true, the user has the ability to use snapshots to restore Cloud PCs. If false, non-admin users can''t use snapshots to restore the Cloud PC.
     */
    private ?string $userRestoreEnabled;

    public function getFrequencyType(): ?string
    {
        return $this->frequencyType;
    }

    public function setFrequencyType(?string $frequencyType): self
    {
        $this->frequencyType = $frequencyType;
        return $this;
    }

    public function getUserRestoreEnabled(): ?string
    {
        return $this->userRestoreEnabled;
    }

    public function setUserRestoreEnabled(?string $userRestoreEnabled): self
    {
        $this->userRestoreEnabled = $userRestoreEnabled;
        return $this;
    }

}
