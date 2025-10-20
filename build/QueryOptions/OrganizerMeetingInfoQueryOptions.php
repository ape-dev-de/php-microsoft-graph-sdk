<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizerMeetingInfo resources
 *
 * Available select fields:
 * - organizer
 */
class OrganizerMeetingInfoQueryOptions extends QueryOptions
{
    public const FIELD_ORGANIZER = 'organizer';

    /**
     * Select specific OrganizerMeetingInfo properties
     * 
     * @param array<string> $select Use OrganizerMeetingInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
