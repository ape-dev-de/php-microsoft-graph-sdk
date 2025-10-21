<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GeolocationColumn resources
 *
 * Available select fields:
 */
class GeolocationColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GeolocationColumn
     */

    /**
     * Select specific GeolocationColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
