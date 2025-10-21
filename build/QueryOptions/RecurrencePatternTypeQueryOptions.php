<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecurrencePatternType resources
 *
 * Available select fields:
 */
class RecurrencePatternTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecurrencePatternType
     */

    /**
     * Select specific RecurrencePatternType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
