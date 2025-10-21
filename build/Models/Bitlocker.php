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
     * @var string[]
     */
    private array $recoveryKeys = [];


    /**
     * @return string[]
     */
    public function getRecoveryKeys(): array
    {
        return $this->recoveryKeys;
    }

    /**
     * @param string[] $recoveryKeys
     */
    public function setRecoveryKeys(array $recoveryKeys): self
    {
        $this->recoveryKeys = $recoveryKeys;
        return $this;
    }

}
