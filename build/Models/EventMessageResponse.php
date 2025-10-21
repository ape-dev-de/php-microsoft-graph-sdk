<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessageResponse
 */
class EventMessageResponse
{
    public function __construct(
        /** An alternate date/time proposed by an invitee for a meeting request to start and end. Read-only. Not filterable. */
        public ?string $proposedNewTime = null,
        /** Specifies the type of response to a meeting request. Possible values are: tentativelyAccepted, accepted, declined. For the eventMessageResponse type, none, organizer, and notResponded are not supported. Read-only. Not filterable. */
        public ?string $responseType = null
    ) {}
}
