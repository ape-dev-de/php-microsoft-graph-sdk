<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllDevicesAssignmentTarget resources
 *
 * Available select fields:
 */
class AllDevicesAssignmentTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllDevicesAssignmentTarget
     */

    /**
     * Select specific AllDevicesAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
