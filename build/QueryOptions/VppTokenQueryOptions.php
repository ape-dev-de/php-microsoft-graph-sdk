<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VppToken resources
 *
 * Available select fields:
 */
class VppTokenQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VppToken
     */

    /**
     * Select specific VppToken properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
