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
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific MessagePinnedEventMessageDetail properties
     * 
     * @param array<string> $select Use MessagePinnedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
