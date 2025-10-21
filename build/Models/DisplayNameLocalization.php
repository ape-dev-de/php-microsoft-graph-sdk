<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DisplayNameLocalization
 */
class DisplayNameLocalization
{
    /**
     * If present, the value of this field contains the displayName string that has been set for the language present in the languageTag field.
     */
    private ?string $displayName;

    /**
     * Provides the language culture-code and friendly name of the language that the displayName field has been provided in.
     */
    private ?string $languageTag;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLanguageTag(): ?string
    {
        return $this->languageTag;
    }

    public function setLanguageTag(?string $languageTag): self
    {
        $this->languageTag = $languageTag;
        return $this;
    }

}
