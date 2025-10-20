<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OperatingSystemSpecifications resources
 *
 * Available select fields:
 * - operatingSystemPlatform
 * - operatingSystemVersion
 */
class OperatingSystemSpecificationsQueryOptions extends QueryOptions
{
    public const FIELD_OPERATING_SYSTEM_PLATFORM = 'operatingSystemPlatform';
    public const FIELD_OPERATING_SYSTEM_VERSION = 'operatingSystemVersion';

    /**
     * Select specific OperatingSystemSpecifications properties
     * 
     * @param array<string> $select Use OperatingSystemSpecificationsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
