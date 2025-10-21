<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingRequestType resources
 *
 * Available select fields:
 */
class MeetingRequestTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingRequestType
     */

    /**
     * Select specific MeetingRequestType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
