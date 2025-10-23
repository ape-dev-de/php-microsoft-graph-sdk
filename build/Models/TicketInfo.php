<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TicketInfo
 */
class TicketInfo
{
    /** The ticket number. */
    public ?string $ticketNumber = null;

    /** The description of the ticket system. */
    public ?string $ticketSystem = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['ticketNumber'])) {
            $this->ticketNumber = $data['ticketNumber'];
        }
        if (isset($data['ticketSystem'])) {
            $this->ticketSystem = $data['ticketSystem'];
        }
    }
}
