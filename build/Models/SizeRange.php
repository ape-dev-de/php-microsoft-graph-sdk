<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SizeRange
 */
class SizeRange
{
    /**
     * The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
     */
    private ?float $maximumSize;

    /**
     * The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
     */
    private ?string $minimumSize;


    public function getMaximumSize(): ?float
    {
        return $this->maximumSize;
    }

    public function setMaximumSize(?float $maximumSize): self
    {
        $this->maximumSize = $maximumSize;
        return $this;
    }

    public function getMinimumSize(): ?string
    {
        return $this->minimumSize;
    }

    public function setMinimumSize(?string $minimumSize): self
    {
        $this->minimumSize = $minimumSize;
        return $this;
    }

}
