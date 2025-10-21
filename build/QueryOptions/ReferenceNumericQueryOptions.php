<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReferenceNumeric resources
 *
 * Available select fields:
 */
class ReferenceNumericQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReferenceNumeric
     */

    /**
     * Select specific ReferenceNumeric properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
