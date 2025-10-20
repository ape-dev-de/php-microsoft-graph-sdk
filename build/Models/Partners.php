<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Partners
 */
class Partners
{
    /**
     * Represents billing details for billed and unbilled data.
     */
    private ?string $billing;

    public function getBilling(): ?string
    {
        return $this->billing;
    }

    public function setBilling(?string $billing): self
    {
        $this->billing = $billing;
        return $this;
    }

}
