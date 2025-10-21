<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CountryNamedLocation resources
 *
 * Available select fields:
 */
class CountryNamedLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CountryNamedLocation
     */

    /**
     * Select specific CountryNamedLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
