<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleScheduleBase resources
 *
 * Available select fields:
 */
class UnifiedRoleScheduleBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleScheduleBase
     */

    /**
     * Select specific UnifiedRoleScheduleBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
