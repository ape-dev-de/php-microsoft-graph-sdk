<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallState resources
 *
 * Available select fields:
 */
class CallStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallState
     */

    /**
     * Select specific CallState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
