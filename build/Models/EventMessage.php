<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessage
 */
class EventMessage
{
    public function __construct(
        /**  */
        public ?string $endDateTime = null,
        /**  */
        public ?bool $isAllDay = null,
        /** True if this meeting request is accessible to a delegate, false otherwise. The default is false. */
        public ?bool $isDelegated = null,
        /**  */
        public ?bool $isOutOfDate = null,
        /**  */
        public ?string $location = null,
        /** The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined. */
        public ?string $meetingMessageType = null,
        /**  */
        public ?string $recurrence = null,
        /**  */
        public ?string $startDateTime = null,
        /**  */
        public ?string $type = null,
        /** The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property. Read-only. */
        public ?string $event = null
    ) {}
}
