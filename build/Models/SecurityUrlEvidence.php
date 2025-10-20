<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUrlEvidence
 */
class SecurityUrlEvidence
{
    /**
     * The Unique Resource Locator (URL).
     */
    private ?string $url;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
