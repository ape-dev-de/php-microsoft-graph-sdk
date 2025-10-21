<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableColumn
 */
class WorkbookTableColumn
{
    /**
     * The index of the column within the columns collection of the table. Zero-indexed. Read-only.
     */
    private ?float $index;

    /**
     * The name of the table column.
     */
    private ?string $name;

    /**
     * TRepresents the raw values of the specified range. The data returned could be of type string, number, or a Boolean. Cell that contain an error will return the error string.
     */
    private ?string $values;

    /**
     * The filter applied to the column. Read-only.
     */
    private ?string $filter;


    public function getIndex(): ?float
    {
        return $this->index;
    }

    public function setIndex(?float $index): self
    {
        $this->index = $index;
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

    public function getValues(): ?string
    {
        return $this->values;
    }

    public function setValues(?string $values): self
    {
        $this->values = $values;
        return $this;
    }

    public function getFilter(): ?string
    {
        return $this->filter;
    }

    public function setFilter(?string $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

}
