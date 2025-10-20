<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerCustomPropertyValue
 */
class FileStorageContainerCustomPropertyValue
{
    /**
     * Indicates whether the custom property is searchable. Optional. The default value is false.
     */
    private ?bool $isSearchable;

    /**
     * Value of the custom property. Required.
     */
    private ?string $value;

    public function getIsSearchable(): ?bool
    {
        return $this->isSearchable;
    }

    public function setIsSearchable(?bool $isSearchable): self
    {
        $this->isSearchable = $isSearchable;
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
