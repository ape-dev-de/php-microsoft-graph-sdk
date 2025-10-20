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
     */
    private ?string $supportedAttributeTypes;

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

    public function getSupportedAttributeTypes(): ?string
    {
        return $this->supportedAttributeTypes;
    }

    public function setSupportedAttributeTypes(?string $supportedAttributeTypes): self
    {
        $this->supportedAttributeTypes = $supportedAttributeTypes;
        return $this;
    }

}
