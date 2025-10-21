<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleScheduleRequestActions resources
 *
 * Available select fields:
 */
class UnifiedRoleScheduleRequestActionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleScheduleRequestActions
     */

    /**
     * Select specific UnifiedRoleScheduleRequestActions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
