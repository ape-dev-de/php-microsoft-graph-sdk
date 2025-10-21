<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryDefinition
 */
class DirectoryDefinition
{
    /**
     */
    private ?string $discoverabilities;

    /**
     * Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $discoveryDateTime;

    /**
     * Name of the directory. Must be unique within the synchronization schema. Not nullable.
     */
    private ?string $name;

    /**
     * Collection of objects supported by the directory.
     */
    private array $objects = [];

    /**
     * Whether this object is read-only.
     */
    private ?bool $readOnly;

    /**
     * Read only value that indicates version discovered. null if discovery hasn't yet occurred.
     */
    private ?string $version;


    public function getDiscoverabilities(): ?string
    {
        return $this->discoverabilities;
    }

    public function setDiscoverabilities(?string $discoverabilities): self
    {
        $this->discoverabilities = $discoverabilities;
        return $this;
    }

    public function getDiscoveryDateTime(): ?\DateTimeInterface
    {
        return $this->discoveryDateTime;
    }

    public function setDiscoveryDateTime(?\DateTimeInterface $discoveryDateTime): self
    {
        $this->discoveryDateTime = $discoveryDateTime;
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

    public function getObjects(): array
    {
        return $this->objects;
    }

    public function setObjects(array $objects): self
    {
        $this->objects = $objects;
        return $this;
    }

    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    public function setReadOnly(?bool $readOnly): self
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
