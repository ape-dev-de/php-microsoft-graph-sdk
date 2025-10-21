<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for JoinMeetingIdMeetingInfo resources
 *
 * Available select fields:
 */
class JoinMeetingIdMeetingInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for JoinMeetingIdMeetingInfo
     */

    /**
     * Select specific JoinMeetingIdMeetingInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
