<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyRoot resources
 *
 * Available select fields:
 */
class PolicyRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyRoot
     */

    /**
     * Select specific PolicyRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
