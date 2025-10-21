<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterOperand
 */
class FilterOperand
{
    /**
     * Collection of values.
     * @var string[]
     */
    private array $values = [];


    /**
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param string[] $values
     */
    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }

}
