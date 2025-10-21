<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalLink
 */
class ExternalLink
{
    /**
     * The URL of the link.
     */
    private ?string $href;


    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }

}
