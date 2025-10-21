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
    /**
     * Available select fields for CallRecordsEndpoint
     */
    public const FIELD_USER_AGENT = 'userAgent';

    /**
     * Select specific CallRecordsEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
