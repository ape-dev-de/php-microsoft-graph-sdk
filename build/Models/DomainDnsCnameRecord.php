<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsCnameRecord
 */
class DomainDnsCnameRecord
{
    /**
     * The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
     */
    private ?string $canonicalName;

    public function getCanonicalName(): ?string
    {
        return $this->canonicalName;
    }

    public function setCanonicalName(?string $canonicalName): self
    {
        $this->canonicalName = $canonicalName;
        return $this;
    }

}
