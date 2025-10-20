<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessageRequest resources
 *
 * Available select fields:
 * - allowNewTimeProposals
 * - meetingRequestType
 * - previousEndDateTime
 * - previousLocation
 * - previousStartDateTime
 * - responseRequested
 */
class EventMessageRequestQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_NEW_TIME_PROPOSALS = 'allowNewTimeProposals';
    public const FIELD_MEETING_REQUEST_TYPE = 'meetingRequestType';
    public const FIELD_PREVIOUS_END_DATE_TIME = 'previousEndDateTime';
    public const FIELD_PREVIOUS_LOCATION = 'previousLocation';
    public const FIELD_PREVIOUS_START_DATE_TIME = 'previousStartDateTime';
    public const FIELD_RESPONSE_REQUESTED = 'responseRequested';

    /**
     * Select specific EventMessageRequest properties
     * 
     * @param array<string> $select Use EventMessageRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
