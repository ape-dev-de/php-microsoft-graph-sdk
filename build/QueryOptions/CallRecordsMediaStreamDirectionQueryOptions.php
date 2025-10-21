<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsMediaStreamDirection resources
 *
 * Available select fields:
 */
class CallRecordsMediaStreamDirectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsMediaStreamDirection
     */

    /**
     * Select specific CallRecordsMediaStreamDirection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
