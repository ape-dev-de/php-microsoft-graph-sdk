<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningSystem
 */
class ProvisioningSystem
{
    /**
     * Details of the system.
     */
    private ?string $details;


    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
        return $this;
    }

}
