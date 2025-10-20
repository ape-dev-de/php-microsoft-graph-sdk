<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartCustomExtension
 */
class OnTokenIssuanceStartCustomExtension
{
    /**
     * Collection of claims to be returned by the API called by this custom authentication extension. Used to populate claims mapping experience in Microsoft Entra admin center. Optional.
     */
    private ?string $claimsForTokenConfiguration;

    public function getClaimsForTokenConfiguration(): ?string
    {
        return $this->claimsForTokenConfiguration;
    }

    public function setClaimsForTokenConfiguration(?string $claimsForTokenConfiguration): self
    {
        $this->claimsForTokenConfiguration = $claimsForTokenConfiguration;
        return $this;
    }

}
