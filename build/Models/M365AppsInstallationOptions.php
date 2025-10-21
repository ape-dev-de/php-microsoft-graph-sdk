<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * M365AppsInstallationOptions
 */
class M365AppsInstallationOptions
{
    /**
     */
    private ?string $appsForMac;

    /**
     */
    private ?string $appsForWindows;

    /**
     */
    private ?string $updateChannel;


    public function getAppsForMac(): ?string
    {
        return $this->appsForMac;
    }

    public function setAppsForMac(?string $appsForMac): self
    {
        $this->appsForMac = $appsForMac;
        return $this;
    }

    public function getAppsForWindows(): ?string
    {
        return $this->appsForWindows;
    }

    public function setAppsForWindows(?string $appsForWindows): self
    {
        $this->appsForWindows = $appsForWindows;
        return $this;
    }

    public function getUpdateChannel(): ?string
    {
        return $this->updateChannel;
    }

    public function setUpdateChannel(?string $updateChannel): self
    {
        $this->updateChannel = $updateChannel;
        return $this;
    }

}
