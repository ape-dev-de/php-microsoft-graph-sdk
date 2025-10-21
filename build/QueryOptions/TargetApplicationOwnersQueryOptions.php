<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetApplicationOwners resources
 *
 * Available select fields:
 */
class TargetApplicationOwnersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetApplicationOwners
     */

    /**
     * Select specific TargetApplicationOwners properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
