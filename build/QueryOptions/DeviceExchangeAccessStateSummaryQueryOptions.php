<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceExchangeAccessStateSummary resources
 *
 * Available select fields:
 * - allowedDeviceCount
 * - blockedDeviceCount
 * - quarantinedDeviceCount
 * - unavailableDeviceCount
 * - unknownDeviceCount
 */
class DeviceExchangeAccessStateSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceExchangeAccessStateSummary
     */
    public const FIELD_ALLOWED_DEVICE_COUNT = 'allowedDeviceCount';
    public const FIELD_BLOCKED_DEVICE_COUNT = 'blockedDeviceCount';
    public const FIELD_QUARANTINED_DEVICE_COUNT = 'quarantinedDeviceCount';
    public const FIELD_UNAVAILABLE_DEVICE_COUNT = 'unavailableDeviceCount';
    public const FIELD_UNKNOWN_DEVICE_COUNT = 'unknownDeviceCount';

    /**
     * Select specific DeviceExchangeAccessStateSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
