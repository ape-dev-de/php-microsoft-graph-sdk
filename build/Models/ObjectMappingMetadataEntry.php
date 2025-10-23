<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectMappingMetadataEntry
 */
class ObjectMappingMetadataEntry
{
    /** 
     * Possible values are: EscrowBehavior, DisableMonitoringForChanges, OriginalJoiningProperty, Disposition, IsCustomerDefined, ExcludeFromReporting, Unsynchronized.
     * @var ObjectMappingMetadata|\stdClass|null
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
            $this->key = is_array($data['key']) ? new ObjectMappingMetadata($data['key']) : $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
