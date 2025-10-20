<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CurrencyColumn resources
 *
 * Available select fields:
 * - locale
 */
class CurrencyColumnQueryOptions extends QueryOptions
{
    public const FIELD_LOCALE = 'locale';

    /**
     * Select specific CurrencyColumn properties
     * 
     * @param array<string> $select Use CurrencyColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
