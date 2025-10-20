<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Package
 */
class Package
{
    /**
     * A string indicating the type of package. While oneNote is the only currently defined value, you should expect other package types to be returned and handle them accordingly.
     */
    private ?string $type;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
