<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinitionMetadataEntry
 */
class ObjectDefinitionMetadataEntry
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Possible values are: PropertyNameAccountEnabled, PropertyNameSoftDeleted, IsSoftDeletionSupported, IsSynchronizeAllSupported, ConnectorDataStorageRequired, Extensions, LinkTypeName.
     * @var ObjectDefinitionMetadata|\stdClass|null
     */
    public ObjectDefinitionMetadata|\stdClass|null $key = null;

    /** Value of the metadata property. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['key'])) {
            $this->key = is_string($data['key']) ? ObjectDefinitionMetadata::tryFrom($data['key']) : $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
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
