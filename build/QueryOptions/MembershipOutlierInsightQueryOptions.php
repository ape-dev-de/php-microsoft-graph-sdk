<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembershipOutlierInsight resources
 *
 * Available select fields:
 */
class MembershipOutlierInsightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MembershipOutlierInsight
     */

    /**
     * Select specific MembershipOutlierInsight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
