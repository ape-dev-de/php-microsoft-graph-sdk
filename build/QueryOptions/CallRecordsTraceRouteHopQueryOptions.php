<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsTraceRouteHop resources
 *
 * Available select fields:
 * - hopCount
 * - ipAddress
 * - roundTripTime
 */
class CallRecordsTraceRouteHopQueryOptions extends QueryOptions
{
    public const FIELD_HOP_COUNT = 'hopCount';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_ROUND_TRIP_TIME = 'roundTripTime';

    /**
     * Select specific CallRecordsTraceRouteHop properties
     * 
     * @param array<string> $select Use CallRecordsTraceRouteHopQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
