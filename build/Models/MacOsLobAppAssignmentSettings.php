<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOsLobAppAssignmentSettings
 */
class MacOsLobAppAssignmentSettings
{
    /**
     * Contains properties used to assign a macOS LOB app to a group.
     */
    private ?string $uninstallOnDeviceRemoval;

    public function getUninstallOnDeviceRemoval(): ?string
    {
        return $this->uninstallOnDeviceRemoval;
    }

    public function setUninstallOnDeviceRemoval(?string $uninstallOnDeviceRemoval): self
    {
        $this->uninstallOnDeviceRemoval = $uninstallOnDeviceRemoval;
        return $this;
    }

}
