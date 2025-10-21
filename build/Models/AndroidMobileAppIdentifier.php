<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMobileAppIdentifier
 */
class AndroidMobileAppIdentifier
{
    /**
     * The identifier for an Android app.
     */
    private ?string $packageId;


    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

}
