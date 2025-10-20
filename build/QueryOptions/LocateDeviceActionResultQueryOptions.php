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
    public const FIELD_DEVICE_LOCATION = 'deviceLocation';

    /**
     * Select specific LocateDeviceActionResult properties
     * 
     * @param array<string> $select Use LocateDeviceActionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
