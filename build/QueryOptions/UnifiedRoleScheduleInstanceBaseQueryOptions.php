<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleScheduleInstanceBase resources
 *
 * Available select fields:
 */
class UnifiedRoleScheduleInstanceBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleScheduleInstanceBase
     */

    /**
     * Select specific UnifiedRoleScheduleInstanceBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
