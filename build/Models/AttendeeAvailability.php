<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeAvailability
 */
class AttendeeAvailability
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The email address and type of attendee - whether it's a person or a resource, and whether required or optional if it's a person.
     * @var AttendeeBase|\stdClass|null
     */
    public mixed $attendee = null;

    /** 
     * The availability status of the attendee. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @var FreeBusyStatus|\stdClass|null
     */
    public mixed $availability = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attendee'])) {
            $this->attendee = is_array($data['attendee']) ? new AttendeeBase($data['attendee']) : $data['attendee'];
        }
        if (isset($data['availability'])) {
            $this->availability = is_array($data['availability']) ? new FreeBusyStatus($data['availability']) : $data['availability'];
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
