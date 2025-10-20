<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceMetadata resources
 *
 * Available select fields:
 * - deviceType
 * - ipAddress
 * - operatingSystemSpecifications
 */
class DeviceMetadataQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_TYPE = 'deviceType';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_OPERATING_SYSTEM_SPECIFICATIONS = 'operatingSystemSpecifications';

    /**
     * Select specific DeviceMetadata properties
     * 
     * @param array<string> $select Use DeviceMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
