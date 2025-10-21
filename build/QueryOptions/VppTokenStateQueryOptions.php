<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VppTokenState resources
 *
 * Available select fields:
 */
class VppTokenStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VppTokenState
     */

    /**
     * Select specific VppTokenState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
