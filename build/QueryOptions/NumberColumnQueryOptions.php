<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NumberColumn resources
 *
 * Available select fields:
 * - decimalPlaces
 * - displayAs
 * - maximum
 * - minimum
 */
class NumberColumnQueryOptions extends QueryOptions
{
    public const FIELD_DECIMAL_PLACES = 'decimalPlaces';
    public const FIELD_DISPLAY_AS = 'displayAs';
    public const FIELD_MAXIMUM = 'maximum';
    public const FIELD_MINIMUM = 'minimum';

    /**
     * Select specific NumberColumn properties
     * 
     * @param array<string> $select Use NumberColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
