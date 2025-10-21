<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TicketInfo resources
 *
 * Available select fields:
 * - ticketNumber
 * - ticketSystem
 */
class TicketInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TicketInfo
     */
    public const FIELD_TICKET_NUMBER = 'ticketNumber';
    public const FIELD_TICKET_SYSTEM = 'ticketSystem';

    /**
     * Select specific TicketInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
