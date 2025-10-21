<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizerMeetingInfo resources
 *
 * Available select fields:
 */
class OrganizerMeetingInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OrganizerMeetingInfo
     */

    /**
     * Select specific OrganizerMeetingInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
