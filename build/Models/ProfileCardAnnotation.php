<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProfileCardAnnotation
 */
class ProfileCardAnnotation
{
    /**
     * If present, the value of this field is used by the profile card as the default property label in the experience (for example, ''Cost Center'').
     */
    private ?string $displayName;

    /**
     * Each resource in this collection represents the localized value of the attribute name for a given language, used as the default label for that locale. For example, a user with a nb-NO client gets ''Kostnadssenter'' as the attribute label, rather than ''Cost Center.
     */
    private ?string $localizations;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

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
