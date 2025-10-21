<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateType resources
 *
 * Available select fields:
 */
class WindowsUpdateTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateType
     */

    /**
     * Select specific WindowsUpdateType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
