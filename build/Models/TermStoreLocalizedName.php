<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreLocalizedName
 */
class TermStoreLocalizedName
{
    /**
     * The language tag for the label.
     */
    private ?string $languageTag;

    /**
     * The name in the localized language.
     */
    private ?string $name;

    public function getLanguageTag(): ?string
    {
        return $this->languageTag;
    }

    public function setLanguageTag(?string $languageTag): self
    {
        $this->languageTag = $languageTag;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

}
