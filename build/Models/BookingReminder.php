<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingReminder
 */
class BookingReminder
{
    /** The message in the reminder. */
    public ?string $message = null;

    /** The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format. */
    public ?string $offset = null;

    /**  */
    public ?BookingReminderRecipients $recipients = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['offset'])) {
            $this->offset = $data['offset'];
        }
        if (isset($data['recipients'])) {
            $this->recipients = $data['recipients'];
        }
    }
}
