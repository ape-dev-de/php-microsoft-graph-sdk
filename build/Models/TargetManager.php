<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetManager
 */
class TargetManager
{
    /**
     * Manager level, between 1 and 4. The direct manager is 1.
     */
    private ?string $managerLevel;

    public function getManagerLevel(): ?string
    {
        return $this->managerLevel;
    }

    public function setManagerLevel(?string $managerLevel): self
    {
        $this->managerLevel = $managerLevel;
        return $this;
    }

}
