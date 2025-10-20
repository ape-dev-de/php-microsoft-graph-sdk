<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileCustomConfiguration
 */
class AndroidWorkProfileCustomConfiguration
{
    /**
     * Android Work Profile custom configuration
     */
    private ?string $omaSettings;

    public function getOmaSettings(): ?string
    {
        return $this->omaSettings;
    }

    public function setOmaSettings(?string $omaSettings): self
    {
        $this->omaSettings = $omaSettings;
        return $this;
    }

}
