<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteSourceService resources
 *
 * Available select fields:
 */
class OnenoteSourceServiceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteSourceService
     */

    /**
     * Select specific OnenoteSourceService properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
