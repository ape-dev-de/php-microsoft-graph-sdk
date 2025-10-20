<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySiteSource
 */
class SecuritySiteSource
{
    /**
     */
    private ?string $site;

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;
        return $this;
    }

}
