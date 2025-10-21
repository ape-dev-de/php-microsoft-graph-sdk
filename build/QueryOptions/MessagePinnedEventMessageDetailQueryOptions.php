<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessagePinnedEventMessageDetail resources
 *
 * Available select fields:
 * - eventDateTime
 * - initiator
 */
class MessagePinnedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MessagePinnedEventMessageDetail
     */
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific MessagePinnedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
