<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinitionMetadataEntry
 */
class ObjectDefinitionMetadataEntry
{
    /** 
     * Possible values are: PropertyNameAccountEnabled, PropertyNameSoftDeleted, IsSoftDeletionSupported, IsSynchronizeAllSupported, ConnectorDataStorageRequired, Extensions, LinkTypeName.
     * @var ObjectDefinitionMetadata|\stdClass|null
     */
    public mixed $key = null;

    /** Value of the metadata property. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
