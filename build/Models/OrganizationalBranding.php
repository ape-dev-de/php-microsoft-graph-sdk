<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OrganizationalBranding
 */
class OrganizationalBranding
{
    /**
     * Add different branding based on a locale.
     */
    private ?string $localizations;

    public function getLocalizations(): ?string
    {
        return $this->localizations;
    }

    public function setLocalizations(?string $localizations): self
    {
        $this->localizations = $localizations;
        return $this;
    }

}
