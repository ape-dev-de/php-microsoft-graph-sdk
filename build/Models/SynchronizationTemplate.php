<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTemplate
 */
class SynchronizationTemplate
{
    /**
     * Identifier of the application this template belongs to.
     */
    private ?string $applicationId;

    /**
     * true if this template is recommended to be the default for the application.
     */
    private ?bool $default;

    /**
     * Description of the template.
     */
    private ?string $description;

    /**
     * true if this template should appear in the collection of templates available for the application instance (service principal).
     */
    private ?bool $discoverable;

    /**
     * One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template.
     */
    private ?string $factoryTag;

    /**
     * Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     */
    private array $metadata = [];

    /**
     * Default synchronization schema for the jobs based on this template.
     */
    private ?string $schema;

    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    public function setApplicationId(?string $applicationId): self
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getDefault(): ?bool
    {
        return $this->default;
    }

    public function setDefault(?bool $default): self
    {
        $this->default = $default;
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

    public function getDiscoverable(): ?bool
    {
        return $this->discoverable;
    }

    public function setDiscoverable(?bool $discoverable): self
    {
        $this->discoverable = $discoverable;
        return $this;
    }

    public function getFactoryTag(): ?string
    {
        return $this->factoryTag;
    }

    public function setFactoryTag(?string $factoryTag): self
    {
        $this->factoryTag = $factoryTag;
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

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    public function setSchema(?string $schema): self
    {
        $this->schema = $schema;
        return $this;
    }

}
