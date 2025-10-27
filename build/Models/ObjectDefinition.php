<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinition
 */
class ObjectDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Defines attributes of the object.
     * @var AttributeDefinition[]
     */
    public array $attributes = [];

    /** 
     * Metadata for the given object.
     * @var ObjectDefinitionMetadataEntry[]
     */
    public array $metadata = [];

    /** Name of the object. Must be unique within a directory definition. Not nullable. */
    public ?string $name = null;

    /** 
     * The API that the provisioning service queries to retrieve data for synchronization.
     * @var string[]
     */
    public array $supportedApis = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attributes'])) {
            $this->attributes = $data['attributes'];
        }
        if (isset($data['metadata'])) {
            $this->metadata = $data['metadata'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['supportedApis'])) {
            $this->supportedApis = $data['supportedApis'];
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
