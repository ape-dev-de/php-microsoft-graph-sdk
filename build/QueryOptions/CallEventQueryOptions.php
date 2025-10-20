<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallEvent resources
 *
 * Available select fields:
 * - callEventType
 * - eventDateTime
 * - participants
 */
class CallEventQueryOptions extends QueryOptions
{
    public const FIELD_CALL_EVENT_TYPE = 'callEventType';
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_PARTICIPANTS = 'participants';

    /**
     * Select specific CallEvent properties
     * 
     * @param array<string> $select Use CallEventQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
