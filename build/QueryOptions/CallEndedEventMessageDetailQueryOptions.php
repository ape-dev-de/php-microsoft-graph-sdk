<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallEndedEventMessageDetail resources
 *
 * Available select fields:
 * - callDuration
 * - callEventType
 * - callId
 * - callParticipants
 * - initiator
 */
class CallEndedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_CALL_DURATION = 'callDuration';
    public const FIELD_CALL_EVENT_TYPE = 'callEventType';
    public const FIELD_CALL_ID = 'callId';
    public const FIELD_CALL_PARTICIPANTS = 'callParticipants';
    public const FIELD_INITIATOR = 'initiator';

    /**
     * Select specific CallEndedEventMessageDetail properties
     * 
     * @param array<string> $select Use CallEndedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
