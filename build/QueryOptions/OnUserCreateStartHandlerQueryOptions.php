<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnUserCreateStartHandler resources
 *
 * Available select fields:
 */
class OnUserCreateStartHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnUserCreateStartHandler
     */

    /**
     * Select specific OnUserCreateStartHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
