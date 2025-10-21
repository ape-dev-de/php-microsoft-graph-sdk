<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterOperatorSchema
 */
class FilterOperatorSchema
{
    /**
     */
    private ?string $arity;

    /**
     */
    private ?string $multivaluedComparisonType;

    /**
     * Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String.
     * @var string[]
     */
    private array $supportedAttributeTypes = [];


    public function getArity(): ?string
    {
        return $this->arity;
    }

    public function setArity(?string $arity): self
    {
        $this->arity = $arity;
        return $this;
    }

    public function getMultivaluedComparisonType(): ?string
    {
        return $this->multivaluedComparisonType;
    }

    public function setMultivaluedComparisonType(?string $multivaluedComparisonType): self
    {
        $this->multivaluedComparisonType = $multivaluedComparisonType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSupportedAttributeTypes(): array
    {
        return $this->supportedAttributeTypes;
    }

    /**
     * @param string[] $supportedAttributeTypes
     */
    public function setSupportedAttributeTypes(array $supportedAttributeTypes): self
    {
        $this->supportedAttributeTypes = $supportedAttributeTypes;
        return $this;
    }

}
