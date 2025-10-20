<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinition
 */
class ObjectDefinition
{
    /**
     * Defines attributes of the object.
     */
    private array $attributes = [];

    /**
     * Metadata for the given object.
     */
    private array $metadata = [];

    /**
     * Name of the object. Must be unique within a directory definition. Not nullable.
     */
    private ?string $name;

    /**
     * The API that the provisioning service queries to retrieve data for synchronization.
     */
    private ?string $supportedApis;

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
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

    public function getSupportedApis(): ?string
    {
        return $this->supportedApis;
    }

    public function setSupportedApis(?string $supportedApis): self
    {
        $this->supportedApis = $supportedApis;
        return $this;
    }

}
