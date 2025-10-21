<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupAssignmentTarget resources
 *
 * Available select fields:
 */
class GroupAssignmentTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupAssignmentTarget
     */

    /**
     * Select specific GroupAssignmentTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
