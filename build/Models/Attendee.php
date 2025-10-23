<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Attendee
 */
class Attendee
{
    /** 
     * The recipient's email address.
     * @var EmailAddress|\stdClass|null
     */
    public mixed $emailAddress = null;

    /** 
     * The type of attendee. The possible values are: required, optional, resource. Currently if the attendee is a person, findMeetingTimes always considers the person is of the Required type.
     * @var AttendeeType|\stdClass|null
     */
    public mixed $type = null;

    /** 
     * An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn't proposed another time, then this property isn't included in a response of a GET event.
     * @var TimeSlot|\stdClass|null
     */
    public mixed $proposedNewTime = null;

    /** 
     * The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
     * @var ResponseStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['emailAddress'])) {
            $this->emailAddress = is_array($data['emailAddress']) ? new EmailAddress($data['emailAddress']) : $data['emailAddress'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new AttendeeType($data['type']) : $data['type'];
        }
        if (isset($data['proposedNewTime'])) {
            $this->proposedNewTime = is_array($data['proposedNewTime']) ? new TimeSlot($data['proposedNewTime']) : $data['proposedNewTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ResponseStatus($data['status']) : $data['status'];
        }
    }
}
