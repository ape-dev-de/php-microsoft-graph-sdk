<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsMobileMSI resources
 *
 * Available select fields:
 */
class WindowsMobileMSIQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsMobileMSI
     */

    /**
     * Select specific WindowsMobileMSI properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
