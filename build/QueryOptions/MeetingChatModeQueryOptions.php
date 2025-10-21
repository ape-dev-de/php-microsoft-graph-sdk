<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingChatMode resources
 *
 * Available select fields:
 */
class MeetingChatModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingChatMode
     */

    /**
     * Select specific MeetingChatMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
