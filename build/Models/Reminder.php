<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Reminder
 */
class Reminder
{
    /** Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. */
    public ?string $changeKey = null;

    /** 
     * The date, time and time zone that the event ends.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $eventEndTime = null;

    /** The unique ID of the event. Read only. */
    public ?string $eventId = null;

    /** 
     * The location of the event.
     * @var Location|\stdClass|null
     */
    public mixed $eventLocation = null;

    /** 
     * The date, time, and time zone that the event starts.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $eventStartTime = null;

    /** The text of the event's subject line. */
    public ?string $eventSubject = null;

    /** The URL to open the event in Outlook on the web.The event opens in the browser if you're logged in to your mailbox via Outlook on the web. You're prompted to log in if you aren't already logged in with the browser.This URL can't be accessed from within an iFrame. */
    public ?string $eventWebLink = null;

    /** 
     * The date, time, and time zone that the reminder is set to occur.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $reminderFireTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['changeKey'])) {
            $this->changeKey = $data['changeKey'];
        }
        if (isset($data['eventEndTime'])) {
            $this->eventEndTime = is_array($data['eventEndTime']) ? new DateTimeTimeZone($data['eventEndTime']) : $data['eventEndTime'];
        }
        if (isset($data['eventId'])) {
            $this->eventId = $data['eventId'];
        }
        if (isset($data['eventLocation'])) {
            $this->eventLocation = is_array($data['eventLocation']) ? new Location($data['eventLocation']) : $data['eventLocation'];
        }
        if (isset($data['eventStartTime'])) {
            $this->eventStartTime = is_array($data['eventStartTime']) ? new DateTimeTimeZone($data['eventStartTime']) : $data['eventStartTime'];
        }
        if (isset($data['eventSubject'])) {
            $this->eventSubject = $data['eventSubject'];
        }
        if (isset($data['eventWebLink'])) {
            $this->eventWebLink = $data['eventWebLink'];
        }
        if (isset($data['reminderFireTime'])) {
            $this->reminderFireTime = is_array($data['reminderFireTime']) ? new DateTimeTimeZone($data['reminderFireTime']) : $data['reminderFireTime'];
        }
    }
}
