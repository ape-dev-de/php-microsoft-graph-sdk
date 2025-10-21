<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffReason resources
 *
 * Available select fields:
 */
class TimeOffReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeOffReason
     */

    /**
     * Select specific TimeOffReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
