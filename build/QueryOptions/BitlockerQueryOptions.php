<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Bitlocker resources
 *
 * Available select fields:
 */
class BitlockerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Bitlocker
     */

    /**
     * Select specific Bitlocker properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
