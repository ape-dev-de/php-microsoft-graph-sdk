<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerViewpoint
 */
class FileStorageContainerViewpoint
{
    /**
     * The current user's effective role. Read-only.
     */
    private ?string $effectiveRole;


    public function getEffectiveRole(): ?string
    {
        return $this->effectiveRole;
    }

    public function setEffectiveRole(?string $effectiveRole): self
    {
        $this->effectiveRole = $effectiveRole;
        return $this;
    }

}
