<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResponseStatus
 */
class ResponseStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The response type. Possible values are: none, organizer, tentativelyAccepted, accepted, declined, notResponded.To differentiate between none and notResponded:  none – from organizer's perspective. This value is used when the status of an attendee/participant is reported to the organizer of a meeting.  notResponded – from attendee's perspective. Indicates the attendee has not responded to the meeting request.  Clients can treat notResponded == none.  As an example, if attendee Alex hasn't responded to a meeting request, getting Alex' response status for that event in Alex' calendar returns notResponded. Getting Alex' response from the calendar of any other attendee or the organizer's returns none. Getting the organizer's response for the event in anybody's calendar also returns none.
     * @var ResponseType|\stdClass|null
     */
    public mixed $response = null;

    /** The date and time when the response was returned. It uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $time = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['response'])) {
            $this->response = is_array($data['response']) ? new ResponseType($data['response']) : $data['response'];
        }
        if (isset($data['time'])) {
            $this->time = is_string($data['time']) ? new \DateTimeImmutable($data['time']) : $data['time'];
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
