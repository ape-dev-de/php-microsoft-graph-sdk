<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidCustomConfiguration
 */
class AndroidCustomConfiguration
{
    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the androidCustomConfiguration resource.
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
