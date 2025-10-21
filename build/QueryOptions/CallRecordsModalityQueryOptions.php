<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsModality resources
 *
 * Available select fields:
 */
class CallRecordsModalityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsModality
     */

    /**
     * Select specific CallRecordsModality properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
