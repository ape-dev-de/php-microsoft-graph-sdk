<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorePoint resources
 *
 * Available select fields:
 */
class RestorePointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestorePoint
     */

    /**
     * Select specific RestorePoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
