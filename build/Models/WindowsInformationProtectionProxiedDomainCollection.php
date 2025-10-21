<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionProxiedDomainCollection
 */
class WindowsInformationProtectionProxiedDomainCollection
{
    /**
     * Display name
     */
    private ?string $displayName;

    /**
     * Windows Information Protection Proxied Domain Collection
     * @var string[]
     */
    private array $proxiedDomains = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProxiedDomains(): array
    {
        return $this->proxiedDomains;
    }

    /**
     * @param string[] $proxiedDomains
     */
    public function setProxiedDomains(array $proxiedDomains): self
    {
        $this->proxiedDomains = $proxiedDomains;
        return $this;
    }

}
