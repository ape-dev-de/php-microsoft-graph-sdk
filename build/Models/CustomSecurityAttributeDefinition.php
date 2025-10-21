<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomSecurityAttributeDefinition
 */
class CustomSecurityAttributeDefinition
{
    /**
     * Name of the attribute set. Case insensitive.
     */
    private ?string $attributeSet;

    /**
     * Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
     */
    private ?string $description;

    /**
     * Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
     */
    private ?bool $isCollection;

    /**
     * Indicates whether custom security attribute values are indexed for searching on objects that are assigned attribute values. Cannot be changed later.
     */
    private ?bool $isSearchable;

    /**
     * Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
     */
    private ?string $name;

    /**
     * Specifies whether the custom security attribute is active or deactivated. Acceptable values are: Available and Deprecated. Can be changed later.
     */
    private ?string $status;

    /**
     * Data type for the custom security attribute values. Supported types are: Boolean, Integer, and String. Cannot be changed later.
     */
    private ?string $type;

    /**
     * Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
     */
    private ?bool $usePreDefinedValuesOnly;

    /**
     * Values that are predefined for this custom security attribute. This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
     * @var string[]
     */
    private array $allowedValues = [];


    public function getAttributeSet(): ?string
    {
        return $this->attributeSet;
    }

    public function setAttributeSet(?string $attributeSet): self
    {
        $this->attributeSet = $attributeSet;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getIsCollection(): ?bool
    {
        return $this->isCollection;
    }

    public function setIsCollection(?bool $isCollection): self
    {
        $this->isCollection = $isCollection;
        return $this;
    }

    public function getIsSearchable(): ?bool
    {
        return $this->isSearchable;
    }

    public function setIsSearchable(?bool $isSearchable): self
    {
        $this->isSearchable = $isSearchable;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
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

    public function getUsePreDefinedValuesOnly(): ?bool
    {
        return $this->usePreDefinedValuesOnly;
    }

    public function setUsePreDefinedValuesOnly(?bool $usePreDefinedValuesOnly): self
    {
        $this->usePreDefinedValuesOnly = $usePreDefinedValuesOnly;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAllowedValues(): array
    {
        return $this->allowedValues;
    }

    /**
     * @param string[] $allowedValues
     */
    public function setAllowedValues(array $allowedValues): self
    {
        $this->allowedValues = $allowedValues;
        return $this;
    }

}
