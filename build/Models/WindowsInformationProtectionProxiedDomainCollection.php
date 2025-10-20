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
     */
    private ?string $proxiedDomains;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getProxiedDomains(): ?string
    {
        return $this->proxiedDomains;
    }

    public function setProxiedDomains(?string $proxiedDomains): self
    {
        $this->proxiedDomains = $proxiedDomains;
        return $this;
    }

}
