<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsWifiBand resources
 *
 * Available select fields:
 */
class CallRecordsWifiBandQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsWifiBand
     */

    /**
     * Select specific CallRecordsWifiBand properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
