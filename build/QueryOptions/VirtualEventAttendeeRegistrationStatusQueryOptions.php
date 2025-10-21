<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventAttendeeRegistrationStatus resources
 *
 * Available select fields:
 */
class VirtualEventAttendeeRegistrationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventAttendeeRegistrationStatus
     */

    /**
     * Select specific VirtualEventAttendeeRegistrationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
