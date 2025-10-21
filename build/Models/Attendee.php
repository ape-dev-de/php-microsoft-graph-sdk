<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Attendee
 */
class Attendee
{
    public function __construct(
        /** The recipient's email address. */
        public ?string $emailAddress = null,
        /** The type of attendee. The possible values are: required, optional, resource. Currently if the attendee is a person, findMeetingTimes always considers the person is of the Required type. */
        public ?string $type = null,
        /** An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn''t proposed another time, then this property isn''t included in a response of a GET event. */
        public ?string $proposedNewTime = null,
        /** The attendee''s response (none, accepted, declined, etc.) for the event and date-time that the response was sent. */
        public ?string $status = null
    ) {}
}
