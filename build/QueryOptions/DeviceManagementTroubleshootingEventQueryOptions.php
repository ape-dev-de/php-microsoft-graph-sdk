<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementTroubleshootingEvent resources
 *
 * Available select fields:
 * - correlationId
 * - eventDateTime
 */
class DeviceManagementTroubleshootingEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementTroubleshootingEvent
     */
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';

    /**
     * Select specific DeviceManagementTroubleshootingEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
