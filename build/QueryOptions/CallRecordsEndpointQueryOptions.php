<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsEndpoint resources
 *
 * Available select fields:
 * - userAgent
 */
class CallRecordsEndpointQueryOptions extends QueryOptions
{
    public const FIELD_USER_AGENT = 'userAgent';

    /**
     * Select specific CallRecordsEndpoint properties
     * 
     * @param array<string> $select Use CallRecordsEndpointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
