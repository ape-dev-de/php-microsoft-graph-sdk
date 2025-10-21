<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocalAdminPasswordSettings
 */
class LocalAdminPasswordSettings
{
    /**
     */
    private ?string $isEnabled;


    public function getIsEnabled(): ?string
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?string $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

}
