<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessDevices resources
 *
 * Available select fields:
 * - deviceFilter
 */
class ConditionalAccessDevicesQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_FILTER = 'deviceFilter';

    /**
     * Select specific ConditionalAccessDevices properties
     * 
     * @param array<string> $select Use ConditionalAccessDevicesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
