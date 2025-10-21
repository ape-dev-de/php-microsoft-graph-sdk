<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffRequest resources
 *
 * Available select fields:
 */
class TimeOffRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeOffRequest
     */

    /**
     * Select specific TimeOffRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
