<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateForBusinessUpdateWeeks resources
 *
 * Available select fields:
 */
class WindowsUpdateForBusinessUpdateWeeksQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateForBusinessUpdateWeeks
     */

    /**
     * Select specific WindowsUpdateForBusinessUpdateWeeks properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
