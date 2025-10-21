<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingReminder resources
 *
 * Available select fields:
 * - message
 * - offset
 * - recipients
 */
class BookingReminderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingReminder
     */
    public const FIELD_MESSAGE = 'message';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RECIPIENTS = 'recipients';

    /**
     * Select specific BookingReminder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
