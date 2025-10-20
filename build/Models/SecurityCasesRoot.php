<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCasesRoot
 */
class SecurityCasesRoot
{
    /**
     */
    private ?string $ediscoveryCases;

    public function getEdiscoveryCases(): ?string
    {
        return $this->ediscoveryCases;
    }

    public function setEdiscoveryCases(?string $ediscoveryCases): self
    {
        $this->ediscoveryCases = $ediscoveryCases;
        return $this;
    }

}
