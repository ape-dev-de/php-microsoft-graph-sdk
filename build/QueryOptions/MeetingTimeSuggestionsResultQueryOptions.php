<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingTimeSuggestionsResult resources
 *
 * Available select fields:
 * - emptySuggestionsReason
 * - meetingTimeSuggestions
 */
class MeetingTimeSuggestionsResultQueryOptions extends QueryOptions
{
    public const FIELD_EMPTY_SUGGESTIONS_REASON = 'emptySuggestionsReason';
    public const FIELD_MEETING_TIME_SUGGESTIONS = 'meetingTimeSuggestions';

    /**
     * Select specific MeetingTimeSuggestionsResult properties
     * 
     * @param array<string> $select Use MeetingTimeSuggestionsResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
