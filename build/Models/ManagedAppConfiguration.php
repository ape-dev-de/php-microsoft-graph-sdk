<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppConfiguration
 */
class ManagedAppConfiguration
{
    /**
     * Configuration used to deliver a set of custom settings as-is to apps for users to whom the configuration is scoped
     * @var string[]
     */
    private array $customSettings = [];


    /**
     * @return string[]
     */
    public function getCustomSettings(): array
    {
        return $this->customSettings;
    }

    /**
     * @param string[] $customSettings
     */
    public function setCustomSettings(array $customSettings): self
    {
        $this->customSettings = $customSettings;
        return $this;
    }

}
