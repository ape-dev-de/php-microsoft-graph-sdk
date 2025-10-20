<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateCombinationConfiguration
 */
class X509CertificateCombinationConfiguration
{
    /**
     * A list of allowed subject key identifier values.
     */
    private ?string $allowedIssuerSkis;

    /**
     * A list of allowed policy OIDs.
     */
    private ?string $allowedPolicyOIDs;

    public function getAllowedIssuerSkis(): ?string
    {
        return $this->allowedIssuerSkis;
    }

    public function setAllowedIssuerSkis(?string $allowedIssuerSkis): self
    {
        $this->allowedIssuerSkis = $allowedIssuerSkis;
        return $this;
    }

    public function getAllowedPolicyOIDs(): ?string
    {
        return $this->allowedPolicyOIDs;
    }

    public function setAllowedPolicyOIDs(?string $allowedPolicyOIDs): self
    {
        $this->allowedPolicyOIDs = $allowedPolicyOIDs;
        return $this;
    }

}
