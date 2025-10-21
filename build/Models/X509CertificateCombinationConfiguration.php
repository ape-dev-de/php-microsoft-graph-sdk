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
     * @var string[]
     */
    private array $allowedIssuerSkis = [];

    /**
     * A list of allowed policy OIDs.
     * @var string[]
     */
    private array $allowedPolicyOIDs = [];


    /**
     * @return string[]
     */
    public function getAllowedIssuerSkis(): array
    {
        return $this->allowedIssuerSkis;
    }

    /**
     * @param string[] $allowedIssuerSkis
     */
    public function setAllowedIssuerSkis(array $allowedIssuerSkis): self
    {
        $this->allowedIssuerSkis = $allowedIssuerSkis;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAllowedPolicyOIDs(): array
    {
        return $this->allowedPolicyOIDs;
    }

    /**
     * @param string[] $allowedPolicyOIDs
     */
    public function setAllowedPolicyOIDs(array $allowedPolicyOIDs): self
    {
        $this->allowedPolicyOIDs = $allowedPolicyOIDs;
        return $this;
    }

}
