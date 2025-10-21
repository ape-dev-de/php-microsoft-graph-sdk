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
     * @var string[]
     */
    private array $omaSettings = [];


    /**
     * @return string[]
     */
    public function getOmaSettings(): array
    {
        return $this->omaSettings;
    }

    /**
     * @param string[] $omaSettings
     */
    public function setOmaSettings(array $omaSettings): self
    {
        $this->omaSettings = $omaSettings;
        return $this;
    }

}
