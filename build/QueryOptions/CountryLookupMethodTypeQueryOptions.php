<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CountryLookupMethodType resources
 *
 * Available select fields:
 */
class CountryLookupMethodTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CountryLookupMethodType
     */

    /**
     * Select specific CountryLookupMethodType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
