<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLearningSummary
 */
class WindowsInformationProtectionAppLearningSummary
{
    /**
     * Application Name
     */
    private ?string $applicationName;

    /**
     */
    private ?string $applicationType;

    /**
     * Windows Information Protection AppLearning Summary entity.
     */
    private ?string $deviceCount;

    public function getApplicationName(): ?string
    {
        return $this->applicationName;
    }

    public function setApplicationName(?string $applicationName): self
    {
        $this->applicationName = $applicationName;
        return $this;
    }

    public function getApplicationType(): ?string
    {
        return $this->applicationType;
    }

    public function setApplicationType(?string $applicationType): self
    {
        $this->applicationType = $applicationType;
        return $this;
    }

    public function getDeviceCount(): ?string
    {
        return $this->deviceCount;
    }

    public function setDeviceCount(?string $deviceCount): self
    {
        $this->deviceCount = $deviceCount;
        return $this;
    }

}
