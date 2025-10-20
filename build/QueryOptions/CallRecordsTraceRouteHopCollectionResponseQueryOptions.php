<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsTraceRouteHopCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallRecordsTraceRouteHopCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallRecordsTraceRouteHopCollectionResponse properties
     * 
     * @param array<string> $select Use CallRecordsTraceRouteHopCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
