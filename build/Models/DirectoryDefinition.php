<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryDefinition
 */
class DirectoryDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?DirectoryDefinitionDiscoverabilities $discoverabilities = null;

    /** Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $discoveryDateTime = null;

    /** Name of the directory. Must be unique within the synchronization schema. Not nullable. */
    public ?string $name = null;

    /** 
     * Collection of objects supported by the directory.
     * @var ObjectDefinition[]
     */
    public array $objects = [];

    /** Whether this object is read-only. */
    public ?bool $readOnly = null;

    /** Read only value that indicates version discovered. null if discovery hasn't yet occurred. */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['discoverabilities'])) {
            $this->discoverabilities = is_array($data['discoverabilities']) ? new DirectoryDefinitionDiscoverabilities($data['discoverabilities']) : $data['discoverabilities'];
        }
        if (isset($data['discoveryDateTime'])) {
            $this->discoveryDateTime = is_string($data['discoveryDateTime']) ? new \DateTimeImmutable($data['discoveryDateTime']) : $data['discoveryDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['objects'])) {
            $this->objects = $data['objects'];
        }
        if (isset($data['readOnly'])) {
            $this->readOnly = is_bool($data['readOnly']) ? $data['readOnly'] : (bool)$data['readOnly'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
