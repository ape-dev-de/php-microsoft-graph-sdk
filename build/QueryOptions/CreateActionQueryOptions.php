<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CreateAction resources
 *
 * Available select fields:
 */
class CreateActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CreateAction
     */

    /**
     * Select specific CreateAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
