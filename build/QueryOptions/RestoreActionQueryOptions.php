<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreAction resources
 *
 * Available select fields:
 */
class RestoreActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreAction
     */

    /**
     * Select specific RestoreAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
