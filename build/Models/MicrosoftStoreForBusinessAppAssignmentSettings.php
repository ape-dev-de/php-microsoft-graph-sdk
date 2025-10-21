<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessAppAssignmentSettings
 */
class MicrosoftStoreForBusinessAppAssignmentSettings
{
    /**
     * Contains properties used to assign an Microsoft Store for Business mobile app to a group.
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
