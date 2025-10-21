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
    /**
     * Available select fields for DeviceMetadata
     */
    public const FIELD_DEVICE_TYPE = 'deviceType';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_OPERATING_SYSTEM_SPECIFICATIONS = 'operatingSystemSpecifications';

    /**
     * Select specific DeviceMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
