<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingTimeSuggestionsResult
 */
class MeetingTimeSuggestionsResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A reason for not returning any meeting suggestions. The possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions. */
    public ?string $emptySuggestionsReason = null;

    /** 
     * An array of meeting suggestions.
     * @var MeetingTimeSuggestion[]
     */
    public array $meetingTimeSuggestions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['emptySuggestionsReason'])) {
            $this->emptySuggestionsReason = $data['emptySuggestionsReason'];
        }
        if (isset($data['meetingTimeSuggestions'])) {
            $this->meetingTimeSuggestions = $data['meetingTimeSuggestions'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
