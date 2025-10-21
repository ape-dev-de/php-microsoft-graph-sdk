<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminMicrosoft365Apps
 */
class AdminMicrosoft365Apps
{
    /**
     * A container for tenant-level settings for Microsoft 365 applications.
     */
    private ?string $installationOptions;


    public function getInstallationOptions(): ?string
    {
        return $this->installationOptions;
    }

    public function setInstallationOptions(?string $installationOptions): self
    {
        $this->installationOptions = $installationOptions;
        return $this;
    }

}
