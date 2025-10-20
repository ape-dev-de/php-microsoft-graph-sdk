<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUnifiedGroupSource
 */
class SecurityUnifiedGroupSource
{
    /**
     * Specifies which sources are included in this group. Possible values are: mailbox, site.
     */
    private ?string $includedSources;

    /**
     */
    private ?string $group;

    public function getIncludedSources(): ?string
    {
        return $this->includedSources;
    }

    public function setIncludedSources(?string $includedSources): self
    {
        $this->includedSources = $includedSources;
        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }

}
