<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenApp
 */
class IosHomeScreenApp
{
    /**
     * Represents an icon for an app on the Home Screen
     */
    private ?string $bundleID;

    public function getBundleID(): ?string
    {
        return $this->bundleID;
    }

    public function setBundleID(?string $bundleID): self
    {
        $this->bundleID = $bundleID;
        return $this;
    }

}
