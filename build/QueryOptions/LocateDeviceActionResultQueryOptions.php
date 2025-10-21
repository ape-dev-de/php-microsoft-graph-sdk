<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocateDeviceActionResult resources
 *
 * Available select fields:
 * - deviceLocation
 */
class LocateDeviceActionResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LocateDeviceActionResult
     */
    public const FIELD_DEVICE_LOCATION = 'deviceLocation';

    /**
     * Select specific LocateDeviceActionResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
