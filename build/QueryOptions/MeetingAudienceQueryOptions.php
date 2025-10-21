<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingAudience resources
 *
 * Available select fields:
 */
class MeetingAudienceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingAudience
     */

    /**
     * Select specific MeetingAudience properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
