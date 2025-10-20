<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingExportSuccessOperation
 */
class PartnersBillingExportSuccessOperation
{
    /**
     */
    private ?string $resourceLocation;

    public function getResourceLocation(): ?string
    {
        return $this->resourceLocation;
    }

    public function setResourceLocation(?string $resourceLocation): self
    {
        $this->resourceLocation = $resourceLocation;
        return $this;
    }

}
