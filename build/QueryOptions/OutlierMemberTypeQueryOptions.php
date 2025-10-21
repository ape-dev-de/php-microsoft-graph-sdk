<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlierMemberType resources
 *
 * Available select fields:
 */
class OutlierMemberTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutlierMemberType
     */

    /**
     * Select specific OutlierMemberType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
