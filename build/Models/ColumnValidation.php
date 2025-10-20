<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnValidation
 */
class ColumnValidation
{
    /**
     * Default BCP 47 language tag for the description.
     */
    private ?string $defaultLanguage;

    /**
     * Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails.
     */
    private array $descriptions = [];

    /**
     * The formula to validate column value. For examples, see Examples of common formulas in lists.
     */
    private ?string $formula;

    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }

    public function setDefaultLanguage(?string $defaultLanguage): self
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    public function setDescriptions(array $descriptions): self
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(?string $formula): self
    {
        $this->formula = $formula;
        return $this;
    }

}
