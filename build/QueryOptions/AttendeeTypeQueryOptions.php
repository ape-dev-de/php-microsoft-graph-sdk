<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendeeType resources
 *
 * Available select fields:
 */
class AttendeeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttendeeType
     */

    /**
     * Select specific AttendeeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
