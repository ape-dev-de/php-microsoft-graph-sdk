<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BroadcastMeetingAudience resources
 *
 * Available select fields:
 */
class BroadcastMeetingAudienceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BroadcastMeetingAudience
     */

    /**
     * Select specific BroadcastMeetingAudience properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
