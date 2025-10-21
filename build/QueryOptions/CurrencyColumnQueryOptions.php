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
    /**
     * Available select fields for CurrencyColumn
     */
    public const FIELD_LOCALE = 'locale';

    /**
     * Select specific CurrencyColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
