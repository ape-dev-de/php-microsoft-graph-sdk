<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Bitlocker
 */
class Bitlocker
{
    /**
     * The recovery keys associated with the bitlocker entity.
     */
    private ?string $recoveryKeys;

    public function getRecoveryKeys(): ?string
    {
        return $this->recoveryKeys;
    }

    public function setRecoveryKeys(?string $recoveryKeys): self
    {
        $this->recoveryKeys = $recoveryKeys;
        return $this;
    }

}
