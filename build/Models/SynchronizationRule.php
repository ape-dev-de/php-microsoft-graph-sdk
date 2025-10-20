<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationRule
 */
class SynchronizationRule
{
    /**
     */
    private ?string $containerFilter;

    /**
     * true if the synchronization rule can be customized; false if this rule is read-only and shouldn't be changed.
     */
    private ?bool $editable;

    /**
     */
    private ?string $groupFilter;

    /**
     * Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
     */
    private ?string $id;

    /**
     * Additional extension properties. Unless instructed explicitly by the support team, metadata values shouldn''t be changed.
     */
    private array $metadata = [];

    /**
     * Human-readable name of the synchronization rule. Not nullable.
     */
    private ?string $name;

    /**
     * Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     */
    private array $objectMappings = [];

    /**
     * Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
     */
    private ?float $priority;

    /**
     * Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
     */
    private ?string $sourceDirectoryName;

    /**
     * Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
     */
    private ?string $targetDirectoryName;

    public function getContainerFilter(): ?string
    {
        return $this->containerFilter;
    }

    public function setContainerFilter(?string $containerFilter): self
    {
        $this->containerFilter = $containerFilter;
        return $this;
    }

    public function getEditable(): ?bool
    {
        return $this->editable;
    }

    public function setEditable(?bool $editable): self
    {
        $this->editable = $editable;
        return $this;
    }

    public function getGroupFilter(): ?string
    {
        return $this->groupFilter;
    }

    public function setGroupFilter(?string $groupFilter): self
    {
        $this->groupFilter = $groupFilter;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
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

    public function getObjectMappings(): array
    {
        return $this->objectMappings;
    }

    public function setObjectMappings(array $objectMappings): self
    {
        $this->objectMappings = $objectMappings;
        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function getSourceDirectoryName(): ?string
    {
        return $this->sourceDirectoryName;
    }

    public function setSourceDirectoryName(?string $sourceDirectoryName): self
    {
        $this->sourceDirectoryName = $sourceDirectoryName;
        return $this;
    }

    public function getTargetDirectoryName(): ?string
    {
        return $this->targetDirectoryName;
    }

    public function setTargetDirectoryName(?string $targetDirectoryName): self
    {
        $this->targetDirectoryName = $targetDirectoryName;
        return $this;
    }

}
