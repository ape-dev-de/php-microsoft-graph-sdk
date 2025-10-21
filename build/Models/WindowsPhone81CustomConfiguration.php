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
