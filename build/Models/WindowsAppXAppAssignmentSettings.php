<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppXAppAssignmentSettings
 */
class WindowsAppXAppAssignmentSettings
{
    /**
     * Contains properties used when assigning a Windows AppX mobile app to a group.
     */
    private ?string $useDeviceContext;


    public function getUseDeviceContext(): ?string
    {
        return $this->useDeviceContext;
    }

    public function setUseDeviceContext(?string $useDeviceContext): self
    {
        $this->useDeviceContext = $useDeviceContext;
        return $this;
    }

}
