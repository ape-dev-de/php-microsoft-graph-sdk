<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Reminder
 */
class Reminder
{
    public function __construct(
        /** Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. */
        public ?string $changeKey = null,
        /** The date, time and time zone that the event ends. */
        public ?string $eventEndTime = null,
        /** The unique ID of the event. Read only. */
        public ?string $eventId = null,
        /** The location of the event. */
        public ?string $eventLocation = null,
        /** The date, time, and time zone that the event starts. */
        public ?string $eventStartTime = null,
        /** The text of the event's subject line. */
        public ?string $eventSubject = null,
        /** The URL to open the event in Outlook on the web.The event opens in the browser if you're logged in to your mailbox via Outlook on the web. You're prompted to log in if you aren't already logged in with the browser.This URL can't be accessed from within an iFrame. */
        public ?string $eventWebLink = null,
        /** The date, time, and time zone that the reminder is set to occur. */
        public ?string $reminderFireTime = null
    ) {}
}
