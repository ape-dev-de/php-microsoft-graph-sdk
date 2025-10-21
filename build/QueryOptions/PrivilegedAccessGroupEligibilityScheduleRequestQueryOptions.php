<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupEligibilityScheduleRequest resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupEligibilityScheduleRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupEligibilityScheduleRequest
     */

    /**
     * Select specific PrivilegedAccessGroupEligibilityScheduleRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
