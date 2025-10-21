<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TicketInfo
 */
class TicketInfo
{
    public function __construct(
        /** The ticket number. */
        public ?string $ticketNumber = null,
        /** The description of the ticket system. */
        public ?string $ticketSystem = null
    ) {}
}
