<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerBucket resources
 *
 * Available select fields:
 */
class PlannerBucketQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerBucket
     */

    /**
     * Select specific PlannerBucket properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
