<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingReminder
 */
class BookingReminder
{
    public function __construct(
        /** The message in the reminder. */
        public ?string $message = null,
        /** The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format. */
        public ?string $offset = null,
        /** This type represents when and to whom to send an e-mail reminder. */
        public ?string $recipients = null
    ) {}
}
