<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingReminderRecipients resources
 *
 * Available select fields:
 */
class BookingReminderRecipientsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingReminderRecipients
     */

    /**
     * Select specific BookingReminderRecipients properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
