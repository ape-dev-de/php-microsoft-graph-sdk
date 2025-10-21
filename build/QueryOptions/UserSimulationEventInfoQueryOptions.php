<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSimulationEventInfo resources
 *
 * Available select fields:
 * - browser
 * - clickSource
 * - eventDateTime
 * - eventName
 * - ipAddress
 * - osPlatformDeviceDetails
 */
class UserSimulationEventInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSimulationEventInfo
     */
    public const FIELD_BROWSER = 'browser';
    public const FIELD_CLICK_SOURCE = 'clickSource';
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_EVENT_NAME = 'eventName';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_OS_PLATFORM_DEVICE_DETAILS = 'osPlatformDeviceDetails';

    /**
     * Select specific UserSimulationEventInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
