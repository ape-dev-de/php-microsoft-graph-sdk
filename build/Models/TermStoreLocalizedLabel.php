<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreLocalizedLabel
 */
class TermStoreLocalizedLabel
{
    /**
     * Indicates whether the label is the default label.
     */
    private ?bool $isDefault;

    /**
     * The language tag for the label.
     */
    private ?string $languageTag;

    /**
     * The name of the label.
     */
    private ?string $name;


    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
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
