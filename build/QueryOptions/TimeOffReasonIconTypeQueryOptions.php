<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffReasonIconType resources
 *
 * Available select fields:
 */
class TimeOffReasonIconTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeOffReasonIconType
     */

    /**
     * Select specific TimeOffReasonIconType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
