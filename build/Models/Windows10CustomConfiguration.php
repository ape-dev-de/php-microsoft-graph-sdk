<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10CustomConfiguration
 */
class Windows10CustomConfiguration
{
    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the windows10CustomConfiguration resource.
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
