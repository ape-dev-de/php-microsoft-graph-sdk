<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingTimeSuggestionsResult
 */
class MeetingTimeSuggestionsResult
{
    /**
     * A reason for not returning any meeting suggestions. The possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions.
     */
    private ?string $emptySuggestionsReason;

    /**
     * An array of meeting suggestions.
     */
    private ?string $meetingTimeSuggestions;

    public function getEmptySuggestionsReason(): ?string
    {
        return $this->emptySuggestionsReason;
    }

    public function setEmptySuggestionsReason(?string $emptySuggestionsReason): self
    {
        $this->emptySuggestionsReason = $emptySuggestionsReason;
        return $this;
    }

    public function getMeetingTimeSuggestions(): ?string
    {
        return $this->meetingTimeSuggestions;
    }

    public function setMeetingTimeSuggestions(?string $meetingTimeSuggestions): self
    {
        $this->meetingTimeSuggestions = $meetingTimeSuggestions;
        return $this;
    }

}
