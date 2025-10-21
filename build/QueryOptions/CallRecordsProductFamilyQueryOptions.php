<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsProductFamily resources
 *
 * Available select fields:
 */
class CallRecordsProductFamilyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsProductFamily
     */

    /**
     * Select specific CallRecordsProductFamily properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
