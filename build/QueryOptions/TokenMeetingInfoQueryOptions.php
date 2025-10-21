<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TokenMeetingInfo resources
 *
 * Available select fields:
 */
class TokenMeetingInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TokenMeetingInfo
     */

    /**
     * Select specific TokenMeetingInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
