<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentPlatformRestrictionsConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceEnrollmentPlatformRestrictionsConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceEnrollmentPlatformRestrictionsConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceEnrollmentPlatformRestrictionsConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
