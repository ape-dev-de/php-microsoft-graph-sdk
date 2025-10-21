<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecurrenceRangeType resources
 *
 * Available select fields:
 */
class RecurrenceRangeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecurrenceRangeType
     */

    /**
     * Select specific RecurrenceRangeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
