<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteLockActionResult
 */
class RemoteLockActionResult
{
    /**
     * Lock action result with a pin to unlock
     */
    private ?string $unlockPin;

    public function getUnlockPin(): ?string
    {
        return $this->unlockPin;
    }

    public function setUnlockPin(?string $unlockPin): self
    {
        $this->unlockPin = $unlockPin;
        return $this;
    }

}
