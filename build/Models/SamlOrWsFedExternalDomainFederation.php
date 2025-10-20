<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SamlOrWsFedExternalDomainFederation
 */
class SamlOrWsFedExternalDomainFederation
{
    /**
     * Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
     */
    private ?string $domains;

    public function getDomains(): ?string
    {
        return $this->domains;
    }

    public function setDomains(?string $domains): self
    {
        $this->domains = $domains;
        return $this;
    }

}
