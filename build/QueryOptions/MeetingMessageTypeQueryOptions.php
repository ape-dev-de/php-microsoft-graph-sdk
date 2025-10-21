<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingMessageType resources
 *
 * Available select fields:
 */
class MeetingMessageTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingMessageType
     */

    /**
     * Select specific MeetingMessageType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
