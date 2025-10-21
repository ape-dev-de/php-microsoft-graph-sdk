<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeDefinition
 */
class AttributeDefinition
{
    /**
     * true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object''s attributes must be designated as the anchor to support synchronization.
     */
    private ?bool $anchor;

    /**
     */
    private array $apiExpressions = [];

    /**
     * true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
     */
    private ?bool $caseExact;

    /**
     * The default value of the attribute.
     */
    private ?string $defaultValue;

    /**
     * true'' to allow null values for attributes.
     */
    private ?bool $flowNullValues;

    /**
     * Metadata for the given object.
     */
    private array $metadata = [];

    /**
     * true if an attribute can have multiple values. Default is false.
     */
    private ?bool $multivalued;

    /**
     */
    private ?string $mutability;

    /**
     * Name of the attribute. Must be unique within the object definition. Not nullable.
     */
    private ?string $name;

    /**
     * For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
     */
    private array $referencedObjects = [];

    /**
     * true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
     */
    private ?bool $required;

    /**
     */
    private ?string $type;


    public function getAnchor(): ?bool
    {
        return $this->anchor;
    }

    public function setAnchor(?bool $anchor): self
    {
        $this->anchor = $anchor;
        return $this;
    }

    public function getApiExpressions(): array
    {
        return $this->apiExpressions;
    }

    public function setApiExpressions(array $apiExpressions): self
    {
        $this->apiExpressions = $apiExpressions;
        return $this;
    }

    public function getCaseExact(): ?bool
    {
        return $this->caseExact;
    }

    public function setCaseExact(?bool $caseExact): self
    {
        $this->caseExact = $caseExact;
        return $this;
    }

    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    public function getFlowNullValues(): ?bool
    {
        return $this->flowNullValues;
    }

    public function setFlowNullValues(?bool $flowNullValues): self
    {
        $this->flowNullValues = $flowNullValues;
        return $this;
    }

    public function getMetadata(): array
    {
        return $this->metadata;
    }

    public function setMetadata(array $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getMultivalued(): ?bool
    {
        return $this->multivalued;
    }

    public function setMultivalued(?bool $multivalued): self
    {
        $this->multivalued = $multivalued;
        return $this;
    }

    public function getMutability(): ?string
    {
        return $this->mutability;
    }

    public function setMutability(?string $mutability): self
    {
        $this->mutability = $mutability;
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

    public function getReferencedObjects(): array
    {
        return $this->referencedObjects;
    }

    public function setReferencedObjects(array $referencedObjects): self
    {
        $this->referencedObjects = $referencedObjects;
        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): self
    {
        $this->required = $required;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
