<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChangeTrackedEntity resources
 *
 * Available select fields:
 */
class ChangeTrackedEntityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChangeTrackedEntity
     */

    /**
     * Select specific ChangeTrackedEntity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
