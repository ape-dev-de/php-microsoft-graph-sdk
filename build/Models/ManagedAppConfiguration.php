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
     */
    private ?string $customSettings;

    public function getCustomSettings(): ?string
    {
        return $this->customSettings;
    }

    public function setCustomSettings(?string $customSettings): self
    {
        $this->customSettings = $customSettings;
        return $this;
    }

}
