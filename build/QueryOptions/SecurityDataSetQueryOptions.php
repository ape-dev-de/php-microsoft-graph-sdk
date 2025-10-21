<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSet resources
 *
 * Available select fields:
 */
class SecurityDataSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSet
     */

    /**
     * Select specific SecurityDataSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
