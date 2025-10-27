<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectMapping
 */
class ObjectMapping
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Attribute mappings define which attributes to map from the source object into the target object and how they should flow. A number of functions are available to support the transformation of the original source values.
     * @var AttributeMapping[]
     */
    public array $attributeMappings = [];

    /** When true, this object mapping will be processed during synchronization. When false, this object mapping will be skipped. */
    public ?bool $enabled = null;

    /**  */
    public ?ObjectFlowTypes $flowTypes = null;

    /** 
     * Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
     * @var ObjectMappingMetadataEntry[]
     */
    public array $metadata = [];

    /** Human-friendly name of the object mapping. */
    public ?string $name = null;

    /** 
     * Defines a filter to be used when deciding whether a given object should be provisioned. For example, you might want to only provision users that are located in the US.
     * @var Filter|\stdClass|null
     */
    public mixed $scope = null;

    /** Name of the object in the source directory. Must match the object name from the source directory definition. */
    public ?string $sourceObjectName = null;

    /** Name of the object in target directory. Must match the object name from the target directory definition. */
    public ?string $targetObjectName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attributeMappings'])) {
            $this->attributeMappings = $data['attributeMappings'];
        }
        if (isset($data['enabled'])) {
            $this->enabled = $data['enabled'];
        }
        if (isset($data['flowTypes'])) {
            $this->flowTypes = is_array($data['flowTypes']) ? new ObjectFlowTypes($data['flowTypes']) : $data['flowTypes'];
        }
        if (isset($data['metadata'])) {
            $this->metadata = $data['metadata'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['scope'])) {
            $this->scope = is_array($data['scope']) ? new Filter($data['scope']) : $data['scope'];
        }
        if (isset($data['sourceObjectName'])) {
            $this->sourceObjectName = $data['sourceObjectName'];
        }
        if (isset($data['targetObjectName'])) {
            $this->targetObjectName = $data['targetObjectName'];
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
