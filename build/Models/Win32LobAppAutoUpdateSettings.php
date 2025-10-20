<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAutoUpdateSettings
 */
class Win32LobAppAutoUpdateSettings
{
    /**
     * Contains properties used to perform the auto-update of an application.
     */
    private ?string $autoUpdateSupersededAppsState;

    public function getAutoUpdateSupersededAppsState(): ?string
    {
        return $this->autoUpdateSupersededAppsState;
    }

    public function setAutoUpdateSupersededAppsState(?string $autoUpdateSupersededAppsState): self
    {
        $this->autoUpdateSupersededAppsState = $autoUpdateSupersededAppsState;
        return $this;
    }

}
