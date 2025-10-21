<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectMapping
 */
class ObjectMapping
{
    /**
     * Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values.
     */
    private array $attributeMappings = [];

    /**
     * When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped.
     */
    private ?bool $enabled;

    /**
     */
    private ?string $flowTypes;

    /**
     * Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     */
    private array $metadata = [];

    /**
     * Human-friendly name of the object mapping.
     */
    private ?string $name;

    /**
     * Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US.
     */
    private ?string $scope;

    /**
     * Name of the object in the source directory. Must match the object name from the source directory definition.
     */
    private ?string $sourceObjectName;

    /**
     * Name of the object in target directory. Must match the object name from the target directory definition.
     */
    private ?string $targetObjectName;


    public function getAttributeMappings(): array
    {
        return $this->attributeMappings;
    }

    public function setAttributeMappings(array $attributeMappings): self
    {
        $this->attributeMappings = $attributeMappings;
        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getFlowTypes(): ?string
    {
        return $this->flowTypes;
    }

    public function setFlowTypes(?string $flowTypes): self
    {
        $this->flowTypes = $flowTypes;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

    public function getSourceObjectName(): ?string
    {
        return $this->sourceObjectName;
    }

    public function setSourceObjectName(?string $sourceObjectName): self
    {
        $this->sourceObjectName = $sourceObjectName;
        return $this;
    }

    public function getTargetObjectName(): ?string
    {
        return $this->targetObjectName;
    }

    public function setTargetObjectName(?string $targetObjectName): self
    {
        $this->targetObjectName = $targetObjectName;
        return $this;
    }

}
