<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassificationError
 */
class ClassificationError
{
    /**
     * A collection of more specific errors contributing to the overall error.
     */
    private ?string $details;

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
        return $this;
    }

}
