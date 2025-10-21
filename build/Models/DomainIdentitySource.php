<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainIdentitySource
 */
class DomainIdentitySource
{
    /**
     * The name of the identity source, typically also the domain name. Read only.
     */
    private ?string $displayName;

    /**
     * The domain name. Read only.
     */
    private ?string $domainName;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

}
