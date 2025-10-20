<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeSet
 */
class AttributeSet
{
    /**
     * Description of the attribute set. Can be up to 128 characters long and include Unicode characters. Can be changed later.
     */
    private ?string $description;

    /**
     * Maximum number of custom security attributes that can be defined in this attribute set. Default value is null. If not specified, the administrator can add up to the maximum of 500 active attributes per tenant. Can be changed later.
     */
    private ?string $maxAttributesPerSet;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getMaxAttributesPerSet(): ?string
    {
        return $this->maxAttributesPerSet;
    }

    public function setMaxAttributesPerSet(?string $maxAttributesPerSet): self
    {
        $this->maxAttributesPerSet = $maxAttributesPerSet;
        return $this;
    }

}
