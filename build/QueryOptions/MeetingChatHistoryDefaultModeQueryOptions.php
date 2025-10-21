<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingChatHistoryDefaultMode resources
 *
 * Available select fields:
 */
class MeetingChatHistoryDefaultModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingChatHistoryDefaultMode
     */

    /**
     * Select specific MeetingChatHistoryDefaultMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
