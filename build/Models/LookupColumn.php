<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LookupColumn
 */
class LookupColumn
{
    /**
     * Indicates whether multiple values can be selected from the source.
     */
    private ?bool $allowMultipleValues;

    /**
     * Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
     */
    private ?bool $allowUnlimitedLength;

    /**
     * The name of the lookup source column.
     */
    private ?string $columnName;

    /**
     * The unique identifier of the lookup source list.
     */
    private ?string $listId;

    /**
     * If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
     */
    private ?string $primaryLookupColumnId;

    public function getAllowMultipleValues(): ?bool
    {
        return $this->allowMultipleValues;
    }

    public function setAllowMultipleValues(?bool $allowMultipleValues): self
    {
        $this->allowMultipleValues = $allowMultipleValues;
        return $this;
    }

    public function getAllowUnlimitedLength(): ?bool
    {
        return $this->allowUnlimitedLength;
    }

    public function setAllowUnlimitedLength(?bool $allowUnlimitedLength): self
    {
        $this->allowUnlimitedLength = $allowUnlimitedLength;
        return $this;
    }

    public function getColumnName(): ?string
    {
        return $this->columnName;
    }

    public function setColumnName(?string $columnName): self
    {
        $this->columnName = $columnName;
        return $this;
    }

    public function getListId(): ?string
    {
        return $this->listId;
    }

    public function setListId(?string $listId): self
    {
        $this->listId = $listId;
        return $this;
    }

    public function getPrimaryLookupColumnId(): ?string
    {
        return $this->primaryLookupColumnId;
    }

    public function setPrimaryLookupColumnId(?string $primaryLookupColumnId): self
    {
        $this->primaryLookupColumnId = $primaryLookupColumnId;
        return $this;
    }

}
