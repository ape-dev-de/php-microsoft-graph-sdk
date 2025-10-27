<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectMappingMetadataEntry
 */
class ObjectMappingMetadataEntry
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Possible values are: EscrowBehavior, DisableMonitoringForChanges, OriginalJoiningProperty, Disposition, IsCustomerDefined, ExcludeFromReporting, Unsynchronized.
     * @var ObjectMappingMetadata|\stdClass|null
     */
    public ObjectMappingMetadata|\stdClass|null $key = null;

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
            $this->key = is_array($data['key']) ? new ObjectMappingMetadata($data['key']) : $data['key'];
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
