<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMapping
 */
class AttributeMapping
{
    /**
     * Default value to be used in case the source property was evaluated to null. Optional.
     */
    private ?string $defaultValue;

    /**
     * For internal use only.
     */
    private ?bool $exportMissingReferences;

    /**
     */
    private ?string $flowBehavior;

    /**
     */
    private ?string $flowType;

    /**
     * If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes.
     */
    private ?float $matchingPriority;

    /**
     * Defines how a value should be extracted (or transformed) from the source object.
     */
    private ?string $source;

    /**
     * Name of the attribute on the target object.
     */
    private ?string $targetAttributeName;


    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    public function getExportMissingReferences(): ?bool
    {
        return $this->exportMissingReferences;
    }

    public function setExportMissingReferences(?bool $exportMissingReferences): self
    {
        $this->exportMissingReferences = $exportMissingReferences;
        return $this;
    }

    public function getFlowBehavior(): ?string
    {
        return $this->flowBehavior;
    }

    public function setFlowBehavior(?string $flowBehavior): self
    {
        $this->flowBehavior = $flowBehavior;
        return $this;
    }

    public function getFlowType(): ?string
    {
        return $this->flowType;
    }

    public function setFlowType(?string $flowType): self
    {
        $this->flowType = $flowType;
        return $this;
    }

    public function getMatchingPriority(): ?float
    {
        return $this->matchingPriority;
    }

    public function setMatchingPriority(?float $matchingPriority): self
    {
        $this->matchingPriority = $matchingPriority;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getTargetAttributeName(): ?string
    {
        return $this->targetAttributeName;
    }

    public function setTargetAttributeName(?string $targetAttributeName): self
    {
        $this->targetAttributeName = $targetAttributeName;
        return $this;
    }

}
