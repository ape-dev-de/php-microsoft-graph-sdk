<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingTimeSuggestionsResult
 */
class MeetingTimeSuggestionsResult
{
    public function __construct(
        /** A reason for not returning any meeting suggestions. The possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions. */
        public ?string $emptySuggestionsReason = null,
        /** @var string[] An array of meeting suggestions. */
        public array $meetingTimeSuggestions = []
    ) {}
}
