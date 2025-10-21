<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsUnavailableRecord
 */
class DomainDnsUnavailableRecord
{
    /**
     * Provides the reason why the DomainDnsUnavailableRecord entity is returned.
     */
    private ?string $description;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

}
