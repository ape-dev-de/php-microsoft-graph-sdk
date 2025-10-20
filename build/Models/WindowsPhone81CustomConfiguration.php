<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsPhone81CustomConfiguration
 */
class WindowsPhone81CustomConfiguration
{
    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the windowsPhone81CustomConfiguration resource.
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
