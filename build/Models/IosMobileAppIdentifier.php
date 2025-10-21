<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMobileAppIdentifier
 */
class IosMobileAppIdentifier
{
    /**
     * The identifier for an iOS app.
     */
    private ?string $bundleId;


    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    public function setBundleId(?string $bundleId): self
    {
        $this->bundleId = $bundleId;
        return $this;
    }

}
