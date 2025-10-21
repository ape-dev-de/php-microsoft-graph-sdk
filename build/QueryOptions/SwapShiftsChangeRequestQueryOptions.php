<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SwapShiftsChangeRequest resources
 *
 * Available select fields:
 */
class SwapShiftsChangeRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SwapShiftsChangeRequest
     */

    /**
     * Select specific SwapShiftsChangeRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
