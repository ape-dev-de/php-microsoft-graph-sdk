<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SortProperty
 */
class SortProperty
{
    /**
     * True if the sort order is descending. Default is false, with the sort order as ascending. Optional.
     */
    private ?bool $isDescending;

    /**
     * The name of the property to sort on. Required.
     */
    private ?string $name;


    public function getIsDescending(): ?bool
    {
        return $this->isDescending;
    }

    public function setIsDescending(?bool $isDescending): self
    {
        $this->isDescending = $isDescending;
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
