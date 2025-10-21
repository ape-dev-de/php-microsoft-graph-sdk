<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExchangeIdFormat resources
 *
 * Available select fields:
 */
class ExchangeIdFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExchangeIdFormat
     */

    /**
     * Select specific ExchangeIdFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
