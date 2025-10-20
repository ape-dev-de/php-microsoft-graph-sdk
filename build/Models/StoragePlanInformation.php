<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StoragePlanInformation
 */
class StoragePlanInformation
{
    /**
     * Indicates whether there are higher storage quota plans available. Read-only.
     */
    private ?string $upgradeAvailable;

    public function getUpgradeAvailable(): ?string
    {
        return $this->upgradeAvailable;
    }

    public function setUpgradeAvailable(?string $upgradeAvailable): self
    {
        $this->upgradeAvailable = $upgradeAvailable;
        return $this;
    }

}
