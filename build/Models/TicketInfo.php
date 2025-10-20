<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TicketInfo
 */
class TicketInfo
{
    /**
     * The ticket number.
     */
    private ?string $ticketNumber;

    /**
     * The description of the ticket system.
     */
    private ?string $ticketSystem;

    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }

    public function setTicketNumber(?string $ticketNumber): self
    {
        $this->ticketNumber = $ticketNumber;
        return $this;
    }

    public function getTicketSystem(): ?string
    {
        return $this->ticketSystem;
    }

    public function setTicketSystem(?string $ticketSystem): self
    {
        $this->ticketSystem = $ticketSystem;
        return $this;
    }

}
