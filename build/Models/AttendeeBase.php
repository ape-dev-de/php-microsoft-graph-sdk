<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeBase
 */
class AttendeeBase
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
    }
}
