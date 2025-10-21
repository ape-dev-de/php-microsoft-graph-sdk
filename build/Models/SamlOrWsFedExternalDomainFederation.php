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
     * @var string[]
     */
    private array $domains = [];


    /**
     * @return string[]
     */
    public function getDomains(): array
    {
        return $this->domains;
    }

    /**
     * @param string[] $domains
     */
    public function setDomains(array $domains): self
    {
        $this->domains = $domains;
        return $this;
    }

}
