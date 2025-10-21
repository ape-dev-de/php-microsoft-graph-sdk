<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsOrganizer resources
 *
 * Available select fields:
 */
class CallRecordsOrganizerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsOrganizer
     */

    /**
     * Select specific CallRecordsOrganizer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
