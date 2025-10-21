<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableRow
 */
class WorkbookTableRow
{
    /**
     * The index of the row within the rows collection of the table. Zero-based. Read-only.
     */
    private ?float $index;

    /**
     * The raw values of the specified range. The data returned could be of type string, number, or a Boolean. Any cell that contain an error will return the error string.
     */
    private ?string $values;


    public function getIndex(): ?float
    {
        return $this->index;
    }

    public function setIndex(?float $index): self
    {
        $this->index = $index;
        return $this;
    }

    public function getValues(): ?string
    {
        return $this->values;
    }

    public function setValues(?string $values): self
    {
        $this->values = $values;
        return $this;
    }

}
