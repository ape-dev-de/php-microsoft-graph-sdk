<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppGroupType resources
 *
 * Available select fields:
 */
class TargetedManagedAppGroupTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetedManagedAppGroupType
     */

    /**
     * Select specific TargetedManagedAppGroupType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
