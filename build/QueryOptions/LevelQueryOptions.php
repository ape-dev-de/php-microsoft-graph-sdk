<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Level resources
 *
 * Available select fields:
 */
class LevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Level
     */

    /**
     * Select specific Level properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
