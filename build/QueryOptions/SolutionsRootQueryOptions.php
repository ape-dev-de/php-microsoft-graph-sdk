<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SolutionsRoot resources
 *
 * Available select fields:
 * - backupRestore
 * - bookingBusinesses
 * - bookingCurrencies
 * - virtualEvents
 */
class SolutionsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SolutionsRoot
     */
    public const FIELD_BACKUP_RESTORE = 'backupRestore';
    public const FIELD_BOOKING_BUSINESSES = 'bookingBusinesses';
    public const FIELD_BOOKING_CURRENCIES = 'bookingCurrencies';
    public const FIELD_VIRTUAL_EVENTS = 'virtualEvents';

    /**
     * Select specific SolutionsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
