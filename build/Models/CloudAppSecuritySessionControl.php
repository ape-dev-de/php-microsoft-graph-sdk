<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudAppSecuritySessionControl
 */
class CloudAppSecuritySessionControl
{
    /**
     * Possible values are: mcasConfigured, monitorOnly, blockDownloads, unknownFutureValue. For more information, see Deploy Conditional Access App Control for featured apps.
     */
    private ?string $cloudAppSecurityType;

    public function getCloudAppSecurityType(): ?string
    {
        return $this->cloudAppSecurityType;
    }

    public function setCloudAppSecurityType(?string $cloudAppSecurityType): self
    {
        $this->cloudAppSecurityType = $cloudAppSecurityType;
        return $this;
    }

}
