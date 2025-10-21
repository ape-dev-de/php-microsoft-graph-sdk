<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateScheduledInstall
 */
class WindowsUpdateScheduledInstall
{
    /**
     */
    private ?string $scheduledInstallDay;

    /**
     * Scheduled Install Time during day
     */
    private ?string $scheduledInstallTime;


    public function getScheduledInstallDay(): ?string
    {
        return $this->scheduledInstallDay;
    }

    public function setScheduledInstallDay(?string $scheduledInstallDay): self
    {
        $this->scheduledInstallDay = $scheduledInstallDay;
        return $this;
    }

    public function getScheduledInstallTime(): ?string
    {
        return $this->scheduledInstallTime;
    }

    public function setScheduledInstallTime(?string $scheduledInstallTime): self
    {
        $this->scheduledInstallTime = $scheduledInstallTime;
        return $this;
    }

}
