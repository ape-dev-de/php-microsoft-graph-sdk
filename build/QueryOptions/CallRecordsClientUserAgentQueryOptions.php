<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsClientUserAgent resources
 *
 * Available select fields:
 */
class CallRecordsClientUserAgentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsClientUserAgent
     */

    /**
     * Select specific CallRecordsClientUserAgent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
