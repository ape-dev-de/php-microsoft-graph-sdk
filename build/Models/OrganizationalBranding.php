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
     * @var string[]
     */
    private array $localizations = [];


    /**
     * @return string[]
     */
    public function getLocalizations(): array
    {
        return $this->localizations;
    }

    /**
     * @param string[] $localizations
     */
    public function setLocalizations(array $localizations): self
    {
        $this->localizations = $localizations;
        return $this;
    }

}
