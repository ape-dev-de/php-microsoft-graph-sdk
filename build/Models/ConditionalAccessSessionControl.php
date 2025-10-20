<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessSessionControl
 */
class ConditionalAccessSessionControl
{
    /**
     * Specifies whether the session control is enabled.
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
