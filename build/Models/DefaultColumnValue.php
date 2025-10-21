<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultColumnValue
 */
class DefaultColumnValue
{
    /**
     * The formula used to compute the default value for the column.
     */
    private ?string $formula;

    /**
     * The direct value to use as the default value for the column.
     */
    private ?string $value;


    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(?string $formula): self
    {
        $this->formula = $formula;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
