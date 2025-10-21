<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageUnpinnedEventMessageDetail resources
 *
 * Available select fields:
 * - eventDateTime
 * - initiator
 */
class MessageUnpinnedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MessageUnpinnedEventMessageDetail
     */
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific MessageUnpinnedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
