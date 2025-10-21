<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenTypeExtension
 */
class OpenTypeExtension
{
    /**
     * A unique text identifier for an open type data extension. Optional.
     */
    private ?string $extensionName;


    public function getExtensionName(): ?string
    {
        return $this->extensionName;
    }

    public function setExtensionName(?string $extensionName): self
    {
        $this->extensionName = $extensionName;
        return $this;
    }

}
