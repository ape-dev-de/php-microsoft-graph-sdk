<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppInstallExperience
 */
class Win32LobAppInstallExperience
{
    /**
     */
    private ?string $deviceRestartBehavior;

    /**
     * Contains installation experience properties for a Win32 App
     */
    private ?string $runAsAccount;


    public function getDeviceRestartBehavior(): ?string
    {
        return $this->deviceRestartBehavior;
    }

    public function setDeviceRestartBehavior(?string $deviceRestartBehavior): self
    {
        $this->deviceRestartBehavior = $deviceRestartBehavior;
        return $this;
    }

    public function getRunAsAccount(): ?string
    {
        return $this->runAsAccount;
    }

    public function setRunAsAccount(?string $runAsAccount): self
    {
        $this->runAsAccount = $runAsAccount;
        return $this;
    }

}
