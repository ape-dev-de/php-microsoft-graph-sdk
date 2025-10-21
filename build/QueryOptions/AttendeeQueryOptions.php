<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Attendee resources
 *
 * Available select fields:
 */
class AttendeeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Attendee
     */

    /**
     * Select specific Attendee properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
